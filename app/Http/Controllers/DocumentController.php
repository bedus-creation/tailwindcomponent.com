<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use League\CommonMark\GithubFlavoredMarkdownConverter;

use Illuminate\Mail\Markdown;

class DocumentController extends Controller
{
    public function index(Request $request, $docx)
    {
        try {
            $docx = file_get_contents(resource_path('docs/master/' . $docx . '.md'));
            $converter = new GithubFlavoredMarkdownConverter();
            $content = $converter->convertToHtml($docx);
            return view('docx.show', ['content' => $content]);
        } catch (Exception $e) {
            abort(404);
        }
    }
}
