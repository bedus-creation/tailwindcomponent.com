@extends('theme.admin.app')


@section('content')
<form method="POST" action="{{route('pageseo.update', $pageseo->id)}}">
    @csrf
    @method('PUT')
    <input type="text" value="{{$pageseo->page_url}}" name="page_url" class="w-full border">
    <textarea name="page_title" class="w-full border" rows="2">{{$pageseo->page_title}}</textarea>
    <textarea name="meta_keywords" class="w-full border" rows="4">{{$pageseo->meta_keywords}}</textarea>
    <textarea name="meta_description" class="w-full border" rows="4">{{$pageseo->meta_description}}</textarea>
    <button class="bg-green-600 text-gray-200 px-3 py-1 float-right rounded-sm" type="submit">Update Page</button>
</form>
@endsection
