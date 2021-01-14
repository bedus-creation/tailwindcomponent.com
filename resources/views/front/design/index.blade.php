@extends('theme.docx.app')

@section('title')
Tailwind Css layout and template design examples.
@endsection

@section('meta')
<meta name="keywords" content="Tailwind,layout, templates, css, Online, editor, html, code-editor">
<meta name="description" content="Lists of templates, layouts, designs with sources using tailwind css.">

<meta property="og:type" content="article" />
<meta property="og:url" content="{{url()->current()}}" />
<meta property="og:title" content="Tailwind Css layout and template design examples." />
<meta property="og:site_name" content="Tailwind Component" />
<meta property="og:description" content="Lists of templates, layouts, designs with sources using tailwind css." />
<meta property="article:author" content="@tailwindcomponent">

<meta name="twitter:site" content="@tailwindcomponent">
<meta name="twitter:creator" content="@tailwindcomponent">
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:domain" content="{{url('/')}}" />
<meta name="twitter:title" property="og:title" itemprop="title"
    content="Tailwind Css layout and template design examples." />
<meta name="twitter:image" property="og:image" content="" />
<meta name="twitter:description" property="og:description" itemprop="description"
    content="TLists of templates, layouts, designs with sources using tailwind css." />
@endsection

@section('content')
<div class="md:flex flex-wrap -mx-4">
    @foreach($design as $item)
    <div class="w-full mb-4 px-4 md:w-1/3">
        <div class="h-full rounded-lg shadow-lg" style="background-color:hsl(0, 0%, 100%);">
            <a target="_blank" href="{{$item->link()}}" class="mb-4">
                <div class="rounded-t-lg w-full h-40"
                    style="background: url({{url(optional($item->pageseo)->cover ?? ' ')}}); background-size:cover !important; background-position:center !important">
                </div>
            </a>
            <div class="border-t border-gray-100 px-4 py-4">
                <div class="mb-2">
                    <a target="_blank" href="{{$item->link()}}"
                        class="font-semibold leading-tight text-xl text-gray-800 hover:text-gray-800">
                        {{ucfirst($item->title)}}
                    </a>
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
    </div>
    @endforeach
</div>

{{$design->links()}}
@endsection
