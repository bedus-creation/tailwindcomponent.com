<?php

namespace App\Application\CMS\Controllers;

use App\Domain\CMS\Models\Page;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\PageSeo;

class PageController extends Controller
{
    protected $repository;

    public function __construct(Page $model)
    {
        $this->repository = $model;
    }

    public function index()
    {
        $pages = Page::all();
        return view('admin.pages.index', compact('pages'));
    }

    public function create(Request $request)
    {
        return view('admin.pages.create');
    }


    public function edit(Request $request, $id)
    {
        $page = $this->repository->findOrFail($id);
        $seo = PageSeo::firstOrCreate(['page_url' => $page->slug]) ?? Optional();
        return view('admin.pages.edit', compact('page', 'seo'));
    }

    public function store(Request $request)
    {
        $request->merge(['page_url' => $request->slug]);
        $article = $this->repository->create($request->all());
        $pageseo = PageSeo::create($request->all());
        $pageseo->update($request->all());
        if ($request->file) {
            $pageseo->toDisk('public')
                ->toCollection('cover')
                ->addMedia($request->file);
        }
        return redirect()->back()->with('success', 'Page has been created.');
    }

    public function update(Request $request, $id)
    {
        // Update page first
        $page = $this->repository->findOrFail($id);
        $page->update($request->all());
        // Update
        $pageseo = PageSeo::firstOrCreate(['page_url' => $page->slug]);
        $pageseo->update($request->all());
        if ($request->file) {
            optional(optional($pageseo->fromCollection('cover')->getMedia())->first())->delete();
            $pageseo->toDisk('public')
                ->toCollection('cover')
                ->addMedia($request->file);
        }
        return redirect()->back()->with('success', 'Page has been updated.');
    }

    /**
     * Delete article resource
     *
     * @param Request $request
     * @param int $id
     * @return void
     */
    public function destroy(Request $request, $id)
    {
        $article = $this->repository->findOrFail($id);
        $article->delete();
        return redirect()->back()->with('success', 'Page has been deleted.');
    }
}
