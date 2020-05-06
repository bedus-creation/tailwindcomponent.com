<?php

namespace App\Http\Controllers;

use App\PageSeo;
use Exception;
use Illuminate\Http\Request;
use League\CommonMark\CommonMarkConverter;

class DocumentController extends Controller
{
    public function index(Request $request, $docx)
    {
        try {
            $pageseo = PageSeo::with('media')->where('page_url', $request->path())->first() ?? optional();
            $docx = file_get_contents(resource_path('docs/master/' . $docx . '.md'));
            $converter = new CommonMarkConverter();
            $content = $converter->convertToHtml($docx);
            return view('docx.show', ['content' => $content, 'pageseo' => $pageseo]);
        } catch (Exception $e) {
            abort(404);
        }
    }
}
