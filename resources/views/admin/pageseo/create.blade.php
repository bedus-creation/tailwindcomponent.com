@extends('theme.admin.app')


@section('content')
<form method="POST" action="{{route('pageseo.store')}}">
    @csrf
    <input type="text" name="page_url" class="w-full border">
    <textarea name="page_title" class="w-full border" rows="2"></textarea>
    <textarea name="meta_keywords" class="w-full border" rows="4"></textarea>
    <textarea name="meta_description" class="w-full border" rows="4"></textarea>
    <button class="bg-green-600 text-gray-200 px-3 py-1 float-right rounded-sm" type="submit">Add Page</button>
</form>
@endsection
