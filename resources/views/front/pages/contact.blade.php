@extends('theme.docx.app')

@section('sidebar')
@include('theme.docx.components.sidebar')
@endsection

@section('css')
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
@endsection

@section('content')
<h1 class="text-gray-700 font-bold text-3xl md:text-3xl leading-snug">Contact Us</h1>
<p class="my-4 leading-relaxed text-gray-700">
    We do actively use social networks such as twitter and email. So if you have any queries, question feel free reach
    to us in the following links.
</p>
<div class="flex justify-center">
    <div class="flex my-2">
        <a href="https://twitter.com/tmg_bedus">
            <i style="background-color:#55ACEE;display:flex !important"
                class="items-center justify-center h-12 w-12 mx-1 rounded-full fab fill-current text-white text-xl fa-twitter"></i>
        </a>
        <a href="https://www.facebook.com/bedu.tamang">
            <i style="background-color: #3B5998;display:flex !important"
                class="items-center justify-center h-12 w-12 mx-1 rounded-full fab fill-current text-white text-xl fa-facebook-f"></i>
        </a>
        <a href="mailto:tmgbedu@gmail.com">
            <i style="background-color:#dd4b39;display:flex !important"
                class="items-center justify-center h-12 w-12 mx-1 rounded-full fas fill-current text-white text-xl fa-envelope"></i>
        </a>
    </div>
</div>
@endsection
