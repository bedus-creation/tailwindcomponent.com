<div class="px-8 py-20" style="font-family: Mulish">
    <div class="flex justify-center mb-2">
        <div class="font-light text-sm text-gray-600">
            &copy; 2019 - {{date('Y')}}
            <a href="{{url('/')}}"
                class="text-base text-gray-600 hover:text-gray-600" style="font-family: 'Source Code Pro';">Web2tailwind.com</a>
        </div>
    </div>
    <div class="flex flex-wrap justify-center text-blue-400">
        <a class="px-2 text-blue-600 hover:text-blue-500" href="{{route('about')}}"> About Us</a> |
        <a class="px-2 text-blue-600 hover:text-blue-500" href="{{route('contact')}}">Contact Us</a> |
        <a class="px-2 text-blue-600 hover:text-blue-500" href="{{route('copyright')}}">Copyright</a> |
        <a class="px-2 text-blue-600 hover:text-blue-500" href="{{route('code')}}">Code of Conduct</a> |
        <a class="px-2 text-blue-600 hover:text-blue-500" href="{{route('privacy')}}">Privacy & Policy</a>
    </div>
</div>
