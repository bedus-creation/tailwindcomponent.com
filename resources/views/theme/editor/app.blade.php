<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','Try Tailwind css Online')</title>
    <link href="/assets/css/tailwind.min.css" rel="stylesheet">
    <script src="/assets/lib/codemirror-5.53.2/lib/codemirror.js"></script>
    <link rel="stylesheet" href="/assets/lib/codemirror-5.53.2/lib/codemirror.css">
    <script src="/assets/lib/codemirror-5.53.2/mode/javascript/javascript.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro|Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/dist/css/app.css">
    @yield('meta')
</head>

<body style="font-family:Roboto">
    @yield('content')
    <script src="{{url(mix('dist/js/app.js'))}}"></script>
    @yield('scripts')
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-106586554-6"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-106586554-6');
    </script>
</body>


</html>
