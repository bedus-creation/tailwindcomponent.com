<?php

namespace App\Application\Front\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
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
