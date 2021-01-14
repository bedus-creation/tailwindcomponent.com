@extends('theme.core.app')

@section('head')
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
@endsection

@section('navbar')
    @include('theme.docx.components.navbar')
@endsection

@section('sidebar')
    @include('theme.docx.components.sidebar')
@endsection


@section('footer')
    @include('theme.front.components.footer')
@endsection

@section('scripts')
    <script>
        hljs.initHighlightingOnLoad()
    </script>
    @include('theme.core.components.scripts')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        const mySwiper = new Swiper(".swiper-container", {
            // Optional parameters
            direction: "horizontal",
            loop: true,

            // If we need pagination
            pagination: {
                el: ".swiper-pagination",
            },

            // Navigation arrows
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

            // And if we need scrollbar
            scrollbar: {
                el: ".swiper-scrollbar",
            },
        })
    </script>
@endsection
