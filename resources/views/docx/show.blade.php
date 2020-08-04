@extends('theme.docx.app')

@section('sidebar')
@include('theme.docx.components.sidebar')
@endsection

@section('title')
{{$pageseo->page_title}} | web2tailwind
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
<div id="content">
    {!!$content!!}
</div>
@endsection
