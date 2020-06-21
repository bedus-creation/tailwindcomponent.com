@extends('theme.admin.app')

@section('css')
<link rel="stylesheet" href="/assets/lib/select2/select2.css">
@endsection

@section('content')
<div class="container mx-auto my-10 px-6 md:px-12">
    <div class="flex justify-between items-center">
        <div class="flex-1">
            <h3 class="text-gray-700 text-3xl font-semibold mb-2">Add Page</h3>
            <p class="font-light">
                This is the place to add new Page.
            </p>
        </div>
        <div class="w-48 text-right">
            <a href="{{route('pages.index')}}"
                class="bg-green-600 text-gray-200 rounded hover:bg-green-500 px-6 py-3 focus:outline-none ">List
                Page</a>
        </div>
    </div>
    <div class="w-3/4 bg-white mt-16 px-6 py-12 rounded-lg shadow-lg">
        <form action="{{route('pages.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label class="block text-gray-600 font-light mb-2">Page Name</label>
                <input type='text' name="name" placeholder="Page name would be like Label"
                    class="w-full px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-green-500" />
            </div>
            <div class="mb-6">
                <label class="block text-gray-600 font-light mb-2">Page Title</label>
                <input type='text' name="title" placeholder="Enter your Page title"
                    class="w-full px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-green-500" />
            </div>
            <div class="mb-6">
                <label class="block text-gray-600 font-light mb-2">Page Slug</label>
                <input type='text' name="slug" placeholder="Enter your Page URL"
                    class="w-full px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-green-500" />
            </div>
            <div class="mb-6">
                <label class="block text-gray-600 font-light mb-2">Sidebar Order</label>
                <input type='integer' name="order" placeholder="Enter your Sidebar Listing Order"
                    class="w-full px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-green-500" />
            </div>
            <div class="mb-2">
                <label class="block text-gray-600 font-light mb-2">Description</label>
                <textarea name="description"
                    class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none  focus:border-green-500"
                    rows="4"></textarea>
            </div>
            <div class="mb-6">
                <file-input name="file" />
            </div>
            <div class="mb-6">
                <label class="block text-gray-600 font-light mb-2">Page Title</label>
                <input type='text' name="page_title" placeholder="Page title would inside title tags"
                    class="w-full px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-green-500" />
            </div>
            <div class="mb-2">
                <label class="block text-gray-600 font-light mb-2">Meta Keywords</label>
                <textarea name="meta_keywords"
                    class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none  focus:border-green-500"
                    rows="4"></textarea>
            </div>
            <div class="mb-2">
                <label class="block text-gray-600 font-light mb-2">Meta Description</label>
                <textarea name="meta_description"
                    class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none  focus:border-green-500"
                    rows="4"></textarea>
            </div>
            <div class="pb-6">
                <button type="submit"
                    class="float-right bg-blue-600 text-gray-200 rounded hover:bg-blue-500 px-8 py-2 focus:outline-none">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection


@section('scripts')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script src="/assets/lib/select2/select2.js"></script>
<script>
    $('#categories').select2({
        minimumResultsForSearch: Infinity
    });
    $('#tags').select2({
        tags: true
    });
</script>
@stack('scripts')
@endsection
