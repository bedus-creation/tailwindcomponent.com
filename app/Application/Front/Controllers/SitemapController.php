<?php

namespace App\Application\Front\Controllers;

use App\Domain\CMS\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PageSeo;

class SitemapController extends Controller
{
    public function index()
    {
        $components = PageSeo::where('page_url', 'like', 'component/%')->latest()->first();

        $content =  view('front.sitemap.index', compact('components'));

        return response($content, 200)
            ->header('content-Type', 'text/xml');
    }

    public function component()
    {
        $components = PageSeo::where('page_url', 'like', 'component/%')->latest()->get();

        $content =  view('front.sitemap.component', compact('components'));
        return response($content, 200)
            ->header('content-Type', 'text/xml');
    }
}
