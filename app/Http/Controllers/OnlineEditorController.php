<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class OnlineEditorController extends Controller
{
    public function index()
    {
        Inertia::setRootView('front.online-editor.index');

        return Inertia::render('Editor/Index', [
            'initcode' => file_get_contents(resource_path('views/front/online-editor/code/tailwind.html'))
        ])->withViewData(['pageseo' => optional(), 'editor' => optional()]);;
    }
}
