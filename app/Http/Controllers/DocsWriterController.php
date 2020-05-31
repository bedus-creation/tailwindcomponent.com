<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class DocsWriterController extends Controller
{
    public function index()
    {
        Inertia::setRootView('front.docs.index');
        return Inertia::render('Docs/Index', [])->withViewData([]);
    }
}
