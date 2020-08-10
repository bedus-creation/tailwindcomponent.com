<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="/assets/img/icon.png" type="image/png">
    <title>@yield('title','Tailwind css components examples')</title>
    <link href="/assets/css/tailwind.min.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">
    <script src="/assets/js/alpine.min.js" defer></script>
    <script src="/assets/js/highlight.min.js"></script>
    <link rel="stylesheet" href="/assets/css/dracula.min.css">
    <script src='/assets/lib/fontawesome/js/all.js'></script>
    <link
        href="https://fonts.googleapis.com/css?family=Manjari:wght@100;400;700|Source+Code+Pro&family=Fira+Sans:wght@300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/markdown.css">
    @yield('meta')
</head>
<style>
    body {
        font-family: 'Manjari', sans-serif;
    }

    p,
    li,
    h1,
    h2,
    h3,
    a {
        font-family: 'Fira Sans', sans-serif;
    }

    pre code {
        background-color: #f8f8f8;
        font-family: 'Source Code Pro', monospace;
        box-shadow: 0 1px 1px rgba(0, 0, 0, .075);
        color: #ca473f;
    }

    h2 {
        --text-opacity: 1;
        margin-top: 4rem;
        margin-bottom: 1rem;
        font-size: 1.25rem;
        font-weight: 700;
        color: rgba(74, 85, 104, var(--text-opacity));
    }

    p {
        --text-opacity: 1;
        color: rgba(74, 85, 104, var(--text-opacity));
        margin-top: 1rem;
        margin-bottom: 1rem;
        line-height: 1.625;
    }

    .html {
        padding: 1.5rem;
        border-width: 1px;
        border-top-left-radius: .5rem;
        border-top-right-radius: .5rem;
    }

    #content ul {
        list-style-type: disc;
    }

    #content ol {
        list-style-type: decimal;
    }

    #content li {
        --text-opacity: 1;
        color: #4a5568;
        color: rgba(74, 85, 104, var(--text-opacity));
        line-height: 1.625;
    }

    @media screen and (min-width:768px) {
        #sidebar {
            top: 70px;
            height: calc(100vh - 70px)
        }
    }
</style>

<body>
    <div id="app">
        @include('theme.docx.components.navbar')
        <div class="md:flex">
            <div class="bg-gray-100 w-full md:w-1/5">
                @yield('sidebar')
            </div>
            <div class="w-full md:w-3/5">
                <div class="px-8 py-10">
                    @yield('content')
                </div>
                @include('theme.front.components.footer')
            </div>
        </div>
    </div>
    <script>
        hljs.initHighlightingOnLoad();
    </script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-106586554-6"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-106586554-6');
    </script>
    <script data-ad-client="ca-pub-4419475170841205" async
        src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
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
