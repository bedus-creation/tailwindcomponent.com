<?php

namespace App\Application\Front\Controllers;;

use League\CommonMark\CommonMarkConverter;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\PageSeo;
use Exception;

class AlpinejsController extends Controller
{
    public function index(Request $request, $docx)
    {
        try {
            $pageseo = PageSeo::with('media')->where('page_url', $request->path())->first() ?? optional();
            $docx = file_get_contents(resource_path('docs/alpinejs/' . $docx . '.md'));
            $converter = new CommonMarkConverter();
            $content = $converter->convertToHtml($docx);
            return view('front.alpinejs.show', ['content' => $content, 'pageseo' => $pageseo]);
        } catch (Exception $e) {
            abort(404);
        }
    }
}
