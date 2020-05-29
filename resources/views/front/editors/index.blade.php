@extends('theme.editor.app')

@section('title')
Try Tailwind css Online
@endsection

@section('meta')
<meta name="keywords" content="Tailwind, css, Online, editor, html, code-editor">
<meta name="description" content="Tailwind css tools to try design online with code highlighting and many more.">

<meta property="og:type" content="article" />
<meta property="og:url" content="{{url()->current()}}" />
<meta property="og:title" content="Try Tailwind css live online." />
<meta property="og:site_name" content="Tailwind Component" />
<meta property="og:description"
    content="Tailwind css tools to try design online with code highlighting and many more." />
<meta property="article:author" content="@tailwindcomponent">

<meta name="twitter:site" content="@tailwindcomponent">
<meta name="twitter:creator" content="@tailwindcomponent">
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:domain" content="{{url('/')}}" />
<meta name="twitter:title" property="og:title" itemprop="title" content="Try Tailwind css live online." />
<meta name="twitter:image" property="og:image" content="" />
<meta name="twitter:description" property="og:description" itemprop="description"
    content="Tailwind css tools to try design online with code highlighting and many more." />
@endsection

@section('content')
<div class="container mx-auto px-4 md:px-0">
    @inertia
</div>
@endsection

@section('scripts')
@endsection
