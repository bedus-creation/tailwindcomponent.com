<link href="/assets/css/tailwind.min.css" rel="stylesheet">

<body>
    <div class="flex">
        <div class="w-1/4">
            <ul>
                <a class="block" href="/admin/pageseo">Pageseo</a>
                <a class="block" href="/admin/editors">Design</a>
            </ul>
        </div>
        <div class="w-3/4 px-6">
            @yield('content')
        </div>
    </div>
</body>
