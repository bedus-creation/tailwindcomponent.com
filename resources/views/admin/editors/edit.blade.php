@extends('theme.admin.app')


@section('content')
<form method="POST" action="{{route('editors.update', $editor->id)}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <label class="font-light">Title</label>
    <input type="text" value="{{$editor->title}}" name="title" class="w-full border">
    <label class="font-light">Status</label>
    <input type="text" value="{{$editor->status}}" name="status" class="w-full border">
    <label class="font-light">Description</label>
    <textarea type="text" name="Description" class="w-full border">{{$editor->description}}</textarea>
    <label class="font-light">Page URL</label>
    <input type="text" value="{{$pageseo->page_url}}" name="page_url" class="w-full border">
    <textarea name="page_title" class="w-full border" rows="2">{{$pageseo->page_title}}</textarea>
    <textarea name="meta_keywords" class="w-full border" rows="4">{{$pageseo->meta_keywords}}</textarea>
    <label class="font-light">Meta Description</label>
    <textarea name="meta_description" class="w-full border" rows="4">{{$pageseo->meta_description}}</textarea>
    <input type="file" class="w-full" name="file">
    <button class="bg-green-600 text-gray-200 px-3 py-1 float-right rounded-sm" type="submit">Update Page</button>
</form>
@endsection
