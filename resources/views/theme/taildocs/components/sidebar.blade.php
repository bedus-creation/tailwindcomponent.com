<div id="sidebar" class="md:fixed w-full md:w-1/5 overflow-y-scroll">
    <div class="px-8 pb-10">
        <h2 class="text-lg font-semibold mt-3 md:mt-12 mb-2 py-3">Documentation</h2>
        <ul class="px-1 my-0">
            @foreach($sidebar as $item)
            <li class="py-1">
                <a class="leading-relaxed text-gray-600" href="{{url($item->slug)}}">{{$item->name}}</a>
            </li>
            @endforeach
        </ul>
    </div>
</div>
