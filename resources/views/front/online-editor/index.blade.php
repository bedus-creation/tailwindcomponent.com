@extends('theme.editor.app')

@section('title')
{{$editor->title}} | Try tailwind Component Online.
@endsection

@section('meta')
<meta name="keywords" content="{{$pageseo->meta_keywords}}">
<meta name="description" content="{{$pageseo->meta_description}}">

<meta property="og:type" content="article" />
<meta property="og:url" content="{{url()->current()}}" />
<meta property="og:title" content="{{$pageseo->page_title}}" />
<meta property="og:image" content="{{$pageseo->cover}}" />
<meta property="og:site_name" content="Tailwind Component" />
<meta property="og:description" content="{{$pageseo->meta_description}}" />
<meta property="og:updated_time" content="{{optional($pageseo->updated_at)->format('Y-m-d\Th:i:s+05:00')}}">
<meta property="article:author" content="@tailwindcomponent">

<meta name="twitter:site" content="@tailwindcomponent">
<meta name="twitter:creator" content="@tailwindcomponent">
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:domain" content="{{url('/')}}" />
<meta name="twitter:title" property="og:title" itemprop="title" content="{{$pageseo->page_title}}" />
<meta name="twitter:image" property="og:image" content="{{$pageseo->cover}}" />
<meta name="twitter:description" property="og:description" itemprop="description"
    content="{{$pageseo->meta_description}}" />
@endsection

@section('content')
<div class="bg-white block lg:hidden overflow-y-auto">
    @include('theme.docx.components.navbar')
    <div class="px-8 mt-4 mb-20">
        <div class="mb-12 h-full rounded-lg shadow-lg" style="background-color:hsl(0, 0%, 100%);">
            <div class="rounded-t-lg w-full h-40"
                style="background: url({{$pageseo->cover ?? ' '}}); background-size:cover !important; background-position:center !important">
            </div>
            <div class="border-t border-gray-100 px-4 py-4">
                <div class="mb-2 font-semibold leading-tight text-xl text-gray-800 hover:text-gray-800">
                    {{ucfirst($editor->title)}}
                </div>
                <div class="flex items-center justify-between my-4">
                    <div class="w-16">
                        <img class="border border-gray-900 p-2 w-12 h-12 rounded-full" src="/assets/img/icon.png"
                            style="border-width:1px !important;">
                    </div>
                    <div class="flex-1">
                        <div class="text-gray-700 font-semibold">
                            Web2tailwind.com
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-10">
            <h2 class="font-bold text-2xl text-gray-700 mb-2">Output</h2>
            <iframe id="iframe" class="w-full" srcdoc="{{$editor->code}}"></iframe>
        </div>
        <div class="mb-10">
            <h2 class="font-bold text-2xl text-gray-700 mb-2">Code</h2>
            <pre><code class="language-html">{{ $editor->code }}</code></pre>
        </div>
    </div>
    @include('theme.front.components.footer')
</div>
<div class="hidden lg:block bg-gray-100 md:p-0">
    @inertia
</div>
@endsection
@section('scripts')
<script>
    // Selecting the iframe element
    var iframe = document.getElementById("iframe");

    // Adjusting the iframe height onload event
    iframe.onload = function(){
        iframe.style.height = iframe.contentWindow.document.body.scrollHeight + 'px';
    }
</script>
@endsection
