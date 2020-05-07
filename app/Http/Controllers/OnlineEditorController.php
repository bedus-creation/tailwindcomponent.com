<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OnlineEditorController extends Controller
{
    public function index()
    {
        return view('front.online-editor.index');
    }
}
