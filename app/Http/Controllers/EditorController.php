<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Editor;
use App\PageSeo;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class EditorController extends Controller
{
    protected $repository;

    public function __construct(Editor $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $editors = Editor::all();
        return view('admin.editors.index', compact('editors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->merge([
            'slug' => 'editors/' . Str::slug($request->title) . '-' . substr(md5(now()->timestamp), 0, 12)
        ]);
        $editor = $this->repository->create($request->all());
        return Redirect::to($editor->link(), 303);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $editor = Editor::where('slug', request()->path())
            ->orWhere('slug', $id)->firstOrFail();
        $pageseo = PageSeo::where('page_url', $editor->link())->first();
        Inertia::setRootView('front.online-editor.index');

        return Inertia::render('Editor/Index', [
            'initcode' => $editor->code
        ])->withViewData(['pageseo' => $pageseo, 'editor' => $editor]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editor = Editor::findOrFail($id);
        $pageseo = PageSeo::firstOrCreate(['page_url' => $editor->link()]) ?? Optional();
        return view('admin.editors.edit', compact('editor', 'pageseo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $editor = Editor::findOrFail($id);
        $request->merge([
            'slug' => $editor->link()
        ]);
        $editor->update($request->all());
        $pageseo = PageSeo::where('page_url', $editor->link())->first();
        $pageseo->update($request->all());
        if ($request->file) {
            optional(optional($pageseo->fromCollection('cover')->getMedia())->first())->delete();
            $pageseo->toDisk('public')
                ->toCollection('cover')
                ->addMedia($request->file);
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
