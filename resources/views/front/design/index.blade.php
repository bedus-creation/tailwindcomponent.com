@extends('theme.design.app')

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
    <div class="w-full mb-2 md:w-1/3 px-4">
        <a target="_blank" href="{{$item->link()}}" class="mb-4">
            <img class="rounded w-full" src="{{url(optional($item->pageseo)->cover ?? ' ')}}">
        </a>
        <div class="px-4 py-4">
            <div class="mb-2">
                <a target="_blank" href="{{$item->link()}}"
                    class="font-semibold leading-tight text-2xl text-gray-800 hover:text-gray-800">
                    {{ucfirst($item->title)}}
                </a>
            </div>
            <div class='flex text-gray-700 text-sm '>
                <div class="pr-3">{{$item->created_at->format('d M, Y')}}</div>
                <div>Posted by <span class="text-red-400">Admin</span></div>
            </div>
        </div>
    </div>
    @endforeach
</div>

{{$design->links()}}
@endsection
