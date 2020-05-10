<?php

namespace App\Http\Controllers;

use App\Editor;
use App\PageSeo;
use Illuminate\Http\Request;

class DesignController extends Controller
{
    public function index()
    {
        $design = Editor::with(['pageseo', 'pageseo.media'])
            ->featured()->latest()->paginate();
        return view('front.design.index', compact('design'));
    }
}
