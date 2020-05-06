<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','Tailwind css components examples')</title>
    <link href="/dist/css/tailwind.min.css" rel="stylesheet">
    <script src="/dist/js/alpine.min.js" defer></script>
    <script src="/dist/js/highlight.min.js"></script>
    <link rel="stylesheet" href="/dist/css/dracula.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro|Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/markdown.css">
    @yield('meta')
</head>
<style>
    body {
        font-family: Roboto;
    }

    pre code {
        background-color: #f8f8f8;
        font-family: 'Source Code Pro', monospace;
        box-shadow: 0 1px 1px rgba(0, 0, 0, .075);
        color: #ca473f;
    }
</style>

<body>
    <div id="app">
        <div class="md:flex">
            <div class="bg-gray-100 w-full md:w-1/5">
                @include('theme.docx.components.sidebar')
            </div>
            <div class="w-full md:w-3/5">
                <div class="px-8">
                    @yield('content')
                </div>
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
</body>

</html>
