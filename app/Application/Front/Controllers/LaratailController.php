<?php

namespace App\Application\Front\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Domain\CMS\Models\Page;
use App\PageSeo;

class LaratailController extends Controller
{
    public function index(Request $request, $slug)
    {
        $sidebar = Page::select('slug', 'name', 'order')
            ->where('slug', 'like', 'laratail/%')->orderBy('order')->get();
        $pageseo = PageSeo::with('media')->where('page_url', $request->path())->first() ?? optional();
        $page = Page::where('slug', request()->path())->firstOrFail();
        return view('front.laratail.index', compact('sidebar', 'page', 'pageseo'));
    }
}
