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
<div class="bg-gray-300 block lg:hidden overflow-y-auto">
    @include('theme.docx.components.navbar')
    <div class="px-8 mt-4 mb-20">
        <div class="h-full rounded-lg shadow-lg" style="background-color:hsl(0, 0%, 100%);">
            <div class="rounded-t-lg w-full h-40"
                style="background: url({{$pageseo->cover ?? ' '}}); background-size:cover !important; background-position:center !important">
            </div>
            <div class="border-t border-gray-100 px-4 py-4">
                <div class="mb-2 font-semibold leading-tight text-xl text-gray-800 hover:text-gray-800">
                    {{ucfirst($pageseo->title)}}
                </div>
            </div>
        </div>
        <div>
            <iframe id="iframe" class="w-full min-h-screen m" srcdoc="{{$editor->code}}"></iframe>
        </div>
        <div class="my-20 px-8">
            <pre><code class="language-html">{{ $editor->code }}</code></pre>
        </div>
    </div>
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
