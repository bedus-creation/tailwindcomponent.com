@extends('theme.blog.app')

@section('content')
    <div class="w-full lg:w-4/5 mx-auto">
        <div class="my-4 font-semibold text-3xl md:text-5xl leading-tight text-gray-700">
            {{ucfirst($article->title)}}
        </div>
        <div class="flex items-center justify-between my-4">
            <div class="w-16">
                <img class="w-12 h-12 rounded-full" src="https://bedramtamang.com.np/img/profile.jpg"
                     style="border-width:1px !important;">
            </div>
            <div class="flex-1" style="font-family: Roboto;">
                <div class="font-light" style="color:rgb(41, 41, 41);">
                    Bedram Tamang
                </div>
                <div class="text-sm leading-tight" style="color:rgb(117, 117, 117);">
                    Oct 31, 2018 · 2 min read
                </div>
            </div>
        </div>
        <img src="{{$article->cover}}">
        <div class="markdown-body">
            {!!parseMarkdown($article->description)!!}
        </div>
        <hr class="border-t border-gray-200 my-6">
        <div class="flex items-center justify-between my-4">
            <div class="mr-4">
                <img class="w-24 h-24 rounded-full" src="https://bedramtamang.com.np/img/profile.jpg"
                     style="border-width:1px !important;">
            </div>
            <div class="flex-1" style="font-family: Roboto;">
                <div class="leading-tight" style="color:rgb(117, 117, 117);font-size: 14px">
                    WRITTEN BY
                </div>
                <div class="font-semibold text-2xl mb-2" style="color:rgb(41, 41, 41);">
                    Bedram Tamang
                </div>
                <div class="text-lg leading-tight" style="color:rgb(117, 117, 117);">
                    Laravel Developer
                </div>
            </div>
        </div>
        <hr class="border-t border-gray-200 my-6">
    </div>

    <div class="container mx-auto px-6 my-12 lg:px-20">
        <h2 class="text-2xl font-bold text-gray-800 mb-4" style="font-family: Roboto">More From Web2tailwind</h2>
        <hr class="border-t mb-6">
        <div class="md:flex flex-wrap -mx-4">
            @foreach($blogs as $item)
                <div class="w-full mb-4 px-4 md:w-1/3">
                    <div class="h-full rounded-lg shadow-lg" style="background-color:hsl(0, 0%, 100%);">
                        <a target="_blank" href="{{$item->link()}}" class="mb-4">
                            <div class="rounded-t-lg w-full h-40"
                                 style="background: url({{$item->cover}}); background-size:cover !important; background-position:center !important">
                            </div>
                        </a>
                        <div class="border-t border-gray-100 px-4 py-4">
                            <div class="flex items-center justify-between my-4">
                                <div class="w-16">
                                    <img class="border border-gray-900 p-2 w-12 h-12 rounded-full"
                                         src="/assets/img/icon.png"
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
            @endforeach
        </div>
    </div>
@endsection
