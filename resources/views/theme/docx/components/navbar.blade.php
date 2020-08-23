<div class="bg-white border-b-2 border-red-500 sticky top-0 z-10">
    @include('theme.docx.components.laratail')
    <nav x-data="{show:false}"
        class="container mx-auto px-6 shadow-lg lg:shadow-none lg:px-0 flex items-center justify-between flex-wrap bg-white py-2">
        <a href="{{url('/')}}" class="flex items-center">
            <img src="/assets/img/logo.png" alt="web2tailwind.com logo" class="h-8 md:h-10 mr-12 md:mr-0">
        </a>
        <div class="flex items-center md:hidden">
            <div class="px-3 py-4 lg:py-3">
                <a target="_blank" href="/tailwind/try"
                    class="bg-green-400 hover:bg-green-500 hover:text-gray-100 text-white font-medium py-2 px-8 rounded-full font-hairline">Try
                    Online
                </a>
            </div>
            <div>
                <button @click="show=!show"
                    class="flex items-center px-3 py-2 border rounded text-gray-700 border-gray-200">
                    <svg class="fill-current h-4 w-4 font-bold" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                    </svg>
                </button>
            </div>
        </div>

        <div @click.away="show = false" :class="{ 'block': show, 'hidden': !show }"
            class="border-t lg:border-t-0 w-full flex-grow md:flex items-center md:justify-end md:w-auto">
            <div>
                <a href="{{url('/design')}}"
                    class="block md:inline-block font-bold text-base px-2 py-2 leading-none rounded text-gray-700 mt-2 md:mt-0">Blogs</a>
                <a href="{{url('/design')}}"
                    class="block md:inline-block font-bold text-base px-3 py-2 leading-none rounded text-gray-700 mt-2 md:mt-0">Design</a>
            </div>
            <div class="hidden lg:block pl-3 py-6 lg:py-3 ">
                <a target="_blank" href="/tailwind/try"
                    class="bg-green-400 hover:bg-green-500 hover:text-gray-100 text-white font-medium py-2 px-8 rounded-full font-hairline">Try
                    Online
                </a>
            </div>
        </div>
    </nav>
</div>
