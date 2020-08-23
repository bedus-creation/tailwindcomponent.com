<?php

namespace App\Application\Front\Controllers;

use App\Domain\CMS\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function blog()
    {
        $article = Article::where('slug', request()->slug)->firstOrFail();
        return view('front.blog.show', compact('article'));
    }
    public function about()
    {
        return view('front.pages.about');
    }

    public function contact()
    {
        return view('front.pages.contact');
    }

    public function copyright()
    {
        return view('front.pages.copyright');
    }


    public function privacy()
    {
        return view('front.pages.privacy');
    }

    public function code()
    {
        return view('front.pages.code');
    }
}
