@extends('theme.admin.app')


@section('content')
<form method="POST" action="{{route('pageseo.store')}}" enctype="multipart/form-data">
    @csrf
    <label class="text-gray-600 font-light">Page Url</label>
    <input type="text" name="page_url" placeholder="Ex. component/form"
        class="w-full mt-2 mb-6 px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-green-500">
    <label class="block text-gray-600 font-light mb-2">Page Title</label>
    <textarea name="page_title" class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none mb-6"
        rows="4" rows="2"></textarea>
    <label class="block text-gray-600 font-light mb-2">Meta Keywords</label>
    <textarea name="meta_keywords" class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none mb-6"
        rows="4" rows="4"></textarea>
    <label class="block text-gray-600 font-light mb-2">Meta Description</label>
    <textarea name="meta_description" class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none mb-6"
        rows="4" rows="4"></textarea>
    <input type="file" name="file">
    <button class="bg-green-600 text-gray-200 px-3 py-1 float-right rounded-sm" type="submit">Add Page</button>
</form>
@endsection
