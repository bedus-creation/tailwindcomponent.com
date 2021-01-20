<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="/assets/img/icon.png" type="image/png">
    <title>@yield('title','Tailwind css components examples')</title>
    <link href="/assets/css/tailwind.min.css" rel="stylesheet">
    <script src="/assets/js/alpine.min.js" defer></script>
    <script src="/assets/js/highlight.min.js"></script>
    <link rel="stylesheet" href="{{mix('/dist/css/markdown.css')}}">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.2/styles/github-gist.min.css">
    <script src='/assets/lib/fontawesome/js/all.js'></script>
    <link
        href="https://fonts.googleapis.com/css?family=Mulish:wght@300|Manjari:wght@100;400;700|Source+Code+Pro&family=Fira+Sans:wght@300&display=swap"
        rel="stylesheet">
    @yield('meta')
</head>

<body style="font-family: 'Mulish', sans-serif;">
    <div id="app">
        @include('theme.docx.components.navbar')
        <div class="container mx-auto px-6">
            <div class="md:flex">
                <div class="w-full md:w-3/4 lg:w-4/5 mx-auto">
                    @yield('content')
                </div>
            </div>
        </div>
        @include('theme.front.components.footer')
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            document.querySelectorAll('pre code').forEach((block) => {
                hljs.highlightBlock(block);
            });
        });
    </script>
    @include('theme.core.components.scripts')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var mySwiper = new Swiper('.swiper-container', {
          // Optional parameters
          direction: 'horizontal',
          loop: true,

          // If we need pagination
          pagination: {
            el: '.swiper-pagination',
          },

          // Navigation arrows
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },

          // And if we need scrollbar
          scrollbar: {
            el: '.swiper-scrollbar',
          },
        })
    </script>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
</body>

</html>
