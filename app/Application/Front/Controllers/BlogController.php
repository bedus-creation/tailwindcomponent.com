<?php

namespace App\Application\Front\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Domain\CMS\Models\Article;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Article::paginate();
        return view('front.blog.index', compact('blogs'));
    }

    public function show()
    {
        $article = Article::where('slug', request()->slug)->firstOrFail();
        return view('front.blog.show', compact('article'));
    }
}
