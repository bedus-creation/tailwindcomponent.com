<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.0.2/highlight.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.0.2/styles/dracula.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro|Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/markdown.css">
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
</body>

</html>
