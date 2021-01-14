<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title','Tailwind css components examples')</title>
    <script src='/assets/lib/fontawesome/js/all.js'></script>
    <link rel="stylesheet" href="/assets/css/markdown.css">
    @include('theme.core.components.head')
    @yield('meta')
    @yield('head')
</head>

<body>
<div id="app">
    @yield('navbar')
    <div class="container mx-auto">
        <div class="md:flex">
            <div class="md:bg-gray-100 w-full md:w-56 xl:w-64">
                <div id="sidebar" class="md:fixed overflow-y-auto w-full md:w-56 xl:w-64 md:mt-12">
                    <div x-data="{show:false}" class="px-8 md:pb-10">
                        @yield('sidebar')
                    </div>
                </div>
            </div>
            <div id="content" class="w-full md:flex-1">
                <div class="w-full px-8 py-10 lg:w-4/5">
                    @yield('content')
                    @yield('footer')
                </div>
            </div>
        </div>
    </div>
</div>
@yield('scripts')
@include('theme.core.components.scripts')
</body>

</html>
