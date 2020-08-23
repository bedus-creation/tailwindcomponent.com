@extends('theme.blog.app')

@section('content')
<div class="">
    <div class="my-4 font-semibold leading-tight text-4xl text-gray-700">
        {{ucfirst($article->title)}}
    </div>
    <div class="mb-12 h-full rounded-lg shadow-lg" style="background-color:hsl(0, 0%, 100%);">
        <div class=" rounded-t-lg w-full h-64"
            style="background: url({{$article->cover ?? ' '}}); background-size:cover !important; background-position:center !important">
        </div>
        <div class="border-t border-gray-100 px-4 py-4">
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
    <div class="markdown-body">
        {!!parseMarkdown($article->description)!!}
    </div>
</div>
@endsection
