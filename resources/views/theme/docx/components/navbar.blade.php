<div class="bg-white border-b-2 border-red-500 sticky top-0 z-10">
    @include('theme.docx.components.laratail')
    <div
        class="container px-8 md:px-0 mx-auto flex justify-between whitespace-no-wrap overflow-x-auto overflow-y-hidden py-2">
        <a href="{{url('/')}}" class="flex items-center">
            <img src="/assets/img/logo.png" alt="web2tailwind.com logo" class="h-8 md:h-10 mr-12 md:mr-0">
        </a>
        <div class="flex">
            <div class="px-3 py-3">
                <a href="/design" class="font-thin text-blue-700">Design</a>
            </div>
            <div class="pl-3 py-3">
                <a target="_blank" href="/tailwind/try"
                    class="bg-green-400 hover:bg-green-500 hover:text-gray-100 text-white font-medium py-2 px-8 rounded-full font-hairline">Try
                    Online</a></div>
        </div>
    </div>
</div>
