<?php

namespace App\Application\Front\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function about()
    {
        return view('front.about.index');
    }
}
