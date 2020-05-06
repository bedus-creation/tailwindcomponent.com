<?php

namespace App\Http\Controllers;

use App\PageSeo;
use Illuminate\Http\Request;

class PageSeoController extends Controller
{
    protected $repository;

    public function __construct(PageSeo $repository)
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
        $pages = PageSeo::all();
        return view('admin.pageseo.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pageseo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        PageSeo::create($request->all());
        return redirect()->to(route('pageseo.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PageSeo  $pageSeo
     * @return \Illuminate\Http\Response
     */
    public function show(PageSeo $pageSeo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PageSeo  $pageSeo
     * @return \Illuminate\Http\Response
     */
    public function edit(PageSeo $pageseo)
    {
        return view('admin.pageseo.edit', compact('pageseo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PageSeo  $pageSeo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->repository->findOrFail($id)
            ->update($request->all());
        return redirect()->back()->with('success', 'Pageseo has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PageSeo  $pageSeo
     * @return \Illuminate\Http\Response
     */
    public function destroy(PageSeo $pageSeo)
    {
        //
    }
}
