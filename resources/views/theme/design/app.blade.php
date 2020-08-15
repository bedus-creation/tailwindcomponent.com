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
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Mulish:wght@300|Source+Code+Pro&family=Fira+Sans:wght@300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/markdown.css">
    @yield('meta')
    @yield('css')
</head>
<style>
    body {
        font-family: 'Mulish', sans-serif;
    }

    pre code {
        background-color: #f8f8f8;
        font-family: 'Source Code Pro', monospace;
        box-shadow: 0 1px 1px rgba(0, 0, 0, .075);
        color: #ca473f;
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
        <div class="md:flex" style="background-color:hsl(0, 0%, 98%);">
            <div class="bg-gray-100 w-full md:w-1/5">
                @include('theme.docx.components.sidebar')
            </div>
            <div class="w-full md:w-4/5">
                <div class="px-8 lg:py-10">
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
</body>

</html>
