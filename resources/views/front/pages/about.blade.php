@extends('theme.design.app')

@section('content')
<div class="w-4/5">
    <h1 class="text-gray-700 font-bold text-2xl md:text-3xl leading-snug">About Us</h1>
    <h2 class="mt-16 mb-4 text-gray-700 font-bold text-2xl md:text-2xl leading-snug">What is Web2tailwind ?</h2>
    <p class="my-4 leading-relaxed text-gray-700">
        Web2tailwind.com is a site for developer, student and learner, where they can grab hundreds of various html
        component code and try online as fast as posible without opening their editor in local machine. Further, they
        can
        edit existing component codes and save for future. Powerful code editor and shortcut helps to quickly test any
        frontend library or html components.
    </p>
    <h2 class="mt-16 mb-4 text-gray-700 font-bold text-2xl md:text-2xl leading-snug">Who we are ?</h2>
    <p class="my-4 leading-relaxed text-gray-700">
        Hi there, I am Bedram Tamang and main author of Web2tailwind.com. As a profession I am full stack Laravel
        developer
        and started using tailwindcss since late 2019. As a full stack developer I have to deal with html and css as
        well
        and tailwind css was quite young at that time, and internet was offering very few resoures. So I decided to
        write
        various
        components in tailwind css and share in internet.
    </p>
    <p class="my-4 leading-relaxed text-gray-700">
        If you want to contact with me personally, use my email <a href="mailto:tmgbedu@gmail.com">tmgbedu@gmail.com</a>
        or Twitter <a href="https://twitter.com/tmg_bedus">@tmg_bedus</a>
    </p>
    <p class="-mx-2 my-4 leading-relaxed text-gray-700" style="font-family: cursive">
    </p>
    <h2 class="mt-16 mb-4 text-gray-700 font-bold text-2xl md:text-2xl leading-snug">Team</h2>
    <div class="lg:flex -mx-2">
        <div class="lg:w-1/3 px-1 mb-2 lg:mb-0">
            <div class="bg-white rounded-lg py-4">
                <div class="flex justify-center mb-2">
                    <img class="rounded-full w-20 h-20" src="/assets/img/bedram-tamang.png">
                </div>
                <div class="flex justify-center text-gray-700">
                    Bedram Tamang
                </div>
                <div class="flex justify-center mt-1 mb-2">
                    <a href="https://twitter.com/tmg_bedus" target="_blank">
                        <svg class="h-4 w-4 mx-1 text-gray-500" aria-hidden="true" focusable="false" data-prefix="fab"
                            data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="currentColor"
                                d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
                            </path>
                        </svg>
                    </a>
                    <a href="https://www.facebook.com/bedu.tamang" target="_blank">
                        <svg class="h-4 w-4 mx-1 text-gray-500" aria-hidden="true" focusable="false" data-prefix="fab"
                            data-icon="facebook" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="currentColor"
                                d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="lg:w-1/3 px-1 mb-2 lg:mb-0">
            <div class="bg-white rounded-lg py-4">
                <div class="flex justify-center mb-2">
                    <img class="rounded-full w-20 h-20" src="/assets/img/bhola-khawas.jpg">
                </div>
                <div class="flex justify-center text-gray-700">
                    Bhola Khawas
                </div>
                <div class="flex justify-center mt-1 mb-2">
                    <a href="https://twitter.com/bkhawas42" target="_blank">
                        <svg class="h-4 w-4 mx-1 text-gray-500" aria-hidden="true" focusable="false" data-prefix="fab"
                            data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="currentColor"
                                d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
                            </path>
                        </svg>
                    </a>
                    <a href="https://www.facebook.com/Allen.khawas.5" target="_blank">
                        <svg class="h-4 w-4 mx-1 text-gray-500" aria-hidden="true" focusable="false" data-prefix="fab"
                            data-icon="facebook" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="currentColor"
                                d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
