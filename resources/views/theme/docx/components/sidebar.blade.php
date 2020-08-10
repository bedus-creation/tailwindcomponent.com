<div id="sidebar" class="md:fixed w-full md:w-1/5 overflow-y-scroll">
    <div x-data="{show:false}" class="px-8 lg:pb-10">
        <div class="flex justify-between items-center">
            <div>
                <h2 class="text-lg font-semibold mt-3 md:mt-12 mb-2 py-3">Components</h2>
            </div>
            <div class="block lg:hidden">
                <button x-on:click="show=!show" class="flex items-center text-gray-700">
                    <span class="material-icons">
                        view_module
                    </span>
                </button>
            </div>
        </div>
        <ul class="px-1 my-0" :class="{'block':show,'hidden lg:block':!show}">
            <li class="py-1">
                <a class="leading-relaxed text-gray-600" href="{{url('/component/introduction')}}">Introduction</a>
            </li>
            <li class="py-1"><a class="leading-relaxed text-gray-600" href="{{url('/component/alert')}}">Alert</a></li>
            <li class="py-1"><a class="leading-relaxed text-gray-600" href="{{url('/component/badge')}}">Badge</a></li>
            <li class="py-1"><a class="leading-relaxed text-gray-600" href="{{url('/component/button')}}">Button</a>
            </li>
            <li class="py-1"><a class="leading-relaxed text-gray-600" href="{{url('/component/card')}}">Card</a></li>
            <li class="py-1"><a class="leading-relaxed text-gray-600" href="{{url('/component/carousel')}}">Carousel</a>
            </li>
            <li class="py-1"><a class="leading-relaxed text-gray-600" href="{{url('/component/column')}}">Column</a>
            </li>
            <li class="py-1"><a class="leading-relaxed text-gray-600"
                    href="{{url('/component/collapse-accordion')}}">Collapse</a>
            </li>
            <li class="py-1">
                <a class="leading-relaxed text-gray-600" href="{{url('/component/dropdown')}}">Dropdowns</a>
            </li>
            <li class="py-1"><a class="leading-relaxed text-gray-600" href="{{url('/component/list-group')}}">List
                    Group</a>
            </li>
            <li class="py-1"><a class="leading-relaxed text-gray-600" href="{{url('/component/media-object')}}">Media
                    Object</a></li>
            <li class="py-1"><a class="leading-relaxed text-gray-600" href="{{url('/component/modal')}}">Modal</a>
            </li>
            <li class="py-1"><a class="leading-relaxed text-gray-600" href="{{url('/component/popover')}}">Popovers</a>
            </li>
            <li class="py-1"><a class="leading-relaxed text-gray-600" href="{{url('/component/navbar')}}">Navbar</a>
            </li>
            <li class="py-1"><a class="leading-relaxed text-gray-600" href="{{url('/component/form')}}">Form</a></li>
            <li class="py-1"><a class="leading-relaxed text-gray-600" href="{{url('/component/login-form')}}">Login
                    Form</a>
            </li>
            <li class="py-1"><a class="leading-relaxed text-gray-600" href="{{url('/component/tooltip')}}">Tooltips</a>
            </li>
            <li class="py-1"><a class="leading-relaxed text-gray-600" href="{{url('/component/table')}}">Table</a>
            </li>
            <li class="py-1"><a class="leading-relaxed text-gray-600" href="{{url('/component/admin-theme')}}">Admin
                    Theme</a>
            </li>
        </ul>
    </div>
</div>
