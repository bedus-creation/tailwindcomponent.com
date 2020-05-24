@extends('theme.admin.app')


@section('content')
<form method="POST" action="{{route('pageseo.store')}}" enctype="multipart/form-data">
    @csrf
    <input type="text" name="page_url" class="w-full border">
    <textarea name="page_title" class="w-full border" rows="2"></textarea>
    <textarea name="meta_keywords" class="w-full border" rows="4"></textarea>
    <textarea name="meta_description" class="w-full border" rows="4"></textarea>
    <input type="file" name="file">
    <button class="bg-green-600 text-gray-200 px-3 py-1 float-right rounded-sm" type="submit">Add Page</button>
</form>
@endsection

<div tabindex="0" class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed">
    <div class="z-50 relative p-3 mx-auto my-0 max-w-full" style="width: 600px;">
        <div class="bg-white rounded shadow-lg border flex flex-col overflow-hidden" style="min-height: 300px;">
            <button class="fill-current h-6 w-6 absolute right-0 top-0 m-6"><svg role="button"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <title>close</title>
                    <path
                        d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z">
                    </path>
                </svg>
            </button>
            <div class="px-6 py-3 text-xl border-b">Title of the modal</div>
            <div class="p-6 flex-grow">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed sit sint, aliquam tenetur aut doloribus
                    eos, eligendi suscipit.</p>
            </div>
            <div class="px-6 py-3 border-t">
                <div>footer content</div>
            </div>
        </div>
    </div>
    <div class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed bg-black opacity-75"></div>
</div>
