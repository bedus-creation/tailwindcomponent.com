@extends('theme.admin.app')


@section('content')
<div class="container mx-auto my-10 px-6 md:px-12">
    <div class="flex justify-between items-center">
        <div class="flex-1">
            <h3 class="text-gray-700 text-3xl font-semibold mb-2">
                Edit Design
            </h3>
            <p class="font-light">
                All the design are liststed here.
            </p>
        </div>
    </div>
    <div class="bg-white mt-16 px-12 py-12 rounded-lg shadow-lg">
        <form method="POST" action="{{route('editors.update', $editor->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <label class="font-light">Title</label>
            <input type="text" value="{{$editor->title}}" name="title" class="w-full border">
            <label class="font-light">Status</label>
            <input type="text" value="{{$editor->status}}" name="status" class="w-full border">
            <label class="font-light">Description</label>
            <textarea type="text" name="Description" class="w-full border">{{$editor->description}}</textarea>

            <div class="mb-2">
                <label class="font-light">Code</label>
                <textarea name="code" class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none"
                    rows="4">{!! $editor->code !!}</textarea>
            </div>

            <label class="font-light">Page URL</label>
            <input type="text" value="{{$pageseo->page_url}}" name="page_url" class="w-full border">
            <textarea name="page_title" class="w-full border" rows="2">{{$pageseo->page_title}}</textarea>
            <textarea name="meta_keywords" class="w-full border" rows="4">{{$pageseo->meta_keywords}}</textarea>
            <label class="font-light">Meta Description</label>
            <textarea name="meta_description" class="w-full border" rows="4">{{$pageseo->meta_description}}</textarea>
            <input type="file" class="w-full" name="file">
            <button class="bg-green-600 text-gray-200 px-3 py-1 float-right rounded-sm" type="submit">Update
                Page</button>
        </form>
    </div>
</div>
@endsection
