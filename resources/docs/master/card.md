# Card

<hr class="border-gray-200">

## Basic Card
Here is an example of basic bootstrap card using tailwind css.

<div class="flex -mx-4">
    <div class="w-1/2 mx-4 bg-gray-100">
        <a href="#" class="mb-4">
            <img class="rounded" src="/assets/docs/master/image-01.jpg">
        </a>
        <div class="px-4 py-4">
            <div class="text-sm text-green-500 mb-2">
            Entertainment
            </div>
            <div class="mb-2">
                <a href="#" class="font-semibold leading-tight text-2xl text-gray-800 hover:text-gray-800">
                Bootstrap Card's Title using Tailwind
                </a>
            </div>
            <div class='flex text-gray-700 text-sm '>
                <div class="pr-3">May 6, 2020</div> 
                <div>Posted by <span class="text-red-400">Admin</span></div>
            </div>
        </div>
    </div>
    <div class="w-1/2 mx-4 bg-gray-100">
        <a href="#" class="mb-4">
            <img class="rounded" src="/assets/docs/master/image-01.jpg">
        </a>
        <div class="px-4 py-4">
            <div class="text-sm text-green-500 mb-2">
            Entertainment
            </div>
            <div class="mb-2">
                <a href="#" class="font-semibold leading-tight text-2xl text-gray-800 hover:text-gray-800">
                Bootstrap Card's Title using Tailwind
                </a>
            </div>
            <div class='flex text-gray-700 text-sm '>
                <div class="pr-3">May 6, 2020</div> 
                <div>Posted by <span class="text-red-400">Admin</span></div>
            </div>
        </div>
    </div>
</div>

<div class="mt-10"></div>

```html
<div class="flex -mx-4">
    <div class="w-1/2 mx-4 bg-gray-100">
        <a href="#" class="mb-4">
            <img class="rounded" src="/assets/docs/master/image-01.jpg">
        </a>
        <div class="px-4 py-4">
            <div class="text-sm text-green-500 mb-2">
            Entertainment
            </div>
            <div class="mb-2">
                <a href="#" class="font-semibold leading-tight text-2xl text-gray-800 hover:text-gray-800">
                Bootstrap Card's Title using Tailwind
                </a>
            </div>
            <div class='flex text-gray-700 text-sm '>
                <div class="pr-3">May 6, 2020</div> 
                <div>Posted by <span class="text-red-400">Admin</span></div>
            </div>
        </div>
    </div>
    <div class="w-1/2 mx-4 bg-gray-100">
        <a href="#" class="mb-4">
            <img class="rounded" src="/assets/docs/master/image-01.jpg">
        </a>
        <div class="px-4 py-4">
            <div class="text-sm text-green-500 mb-2">
            Entertainment
            </div>
            <div class="mb-2">
                <a href="#" class="font-semibold leading-tight text-2xl text-gray-800 hover:text-gray-800">
                Bootstrap Card's Title using Tailwind
                </a>
            </div>
            <div class='flex text-gray-700 text-sm '>
                <div class="pr-3">May 6, 2020</div> 
                <div>Posted by <span class="text-red-400">Admin</span></div>
            </div>
        </div>
    </div>
</div>
```

<div class="mt-10"></div>

## Card with Horizontal line on title

<div class="flex -mx-4">
    <div class="w-1/2 mx-4 border shadow-sm">
        <a href="#" class="mb-4">
            <img class="rounded" src="/assets/docs/master/image-01.jpg">
        </a>
        <div class="px-4 py-4">
            <div>
                <a href="#" class="font-semibold leading-tight text-2xl text-gray-800 hover:text-gray-800">
                Bootstrap Card's Title
                </a>
            </div>
            <hr class="border-gray-200 my-1 border-bottom-none" style="border-top-width:0">
            <p class="text-gray-900">
            Bootstrap card example using tailwind css with horizontal line below card title to distinguish design.
            </p>
            <div class='flex text-gray-700 text-sm '>
                <div class="pr-3">May 6, 2020</div> 
                <div>Posted by <span class="text-red-400">Admin</span></div>
            </div>
        </div>
    </div>
    <div class="w-1/2 mx-4 border shadow-sm">
        <a href="#" class="mb-4">
            <img class="rounded" src="/assets/docs/master/image-01.jpg">
        </a>
        <div class="px-4 py-4">
            <div>
                <a href="#" class="font-semibold leading-tight text-2xl text-gray-800 hover:text-gray-800">
                Bootstrap Card's Title
                </a>
            </div>
            <hr class="border-gray-200 my-1 border-bottom-none" style="border-top-width:0">
            <p class="text-gray-900">
            Bootstrap card example using tailwind css with horizontal line below card title to distinguish design.
            </p>
            <div class='text-gray-700 text-sm font-bold'>
                <a href="#" class="float-right">Read more...</a>
            </div>
        </div>
    </div>
</div>

## Background Image Card
Here is an example of card with background Image.
<div class="w-full h-40 bg-gray-100 " style="background-image:url('/assets/docs/master/image-01.jpg')">
    <div class="flex items-end w-full h-full" style="background-color:rgba(0,0,0,0.6)">
        <div class="px-4 py-2">
            <div class="text-sm text-green-400 mb-2">
            Entertainment
            </div>
            <div class="mb-2">
                <a href="#" class="font-semibold leading-tight text-2xl text-gray-100 hover:text-gray-100">
                Bootstrap Card's Title using Tailwind
                </a>
            </div>
            <div class='flex text-gray-200 text-sm '>
                <div class="pr-3">May 6, 2020</div> 
                <div>Posted by Admin</div>
            </div>
        </div>
    </div>
</div>

<div class="mt-5"></div>
Example Code: 

```html
<div class="w-full h-40 bg-gray-100 " style="background-image:url('/assets/docs/master/image-01.jpg')">
    <div class="flex items-end w-full h-full" style="background-color:rgba(0,0,0,0.6)">
        <div class="px-4 py-2">
            <div class="text-sm text-green-400 mb-2">
            Entertainment
            </div>
            <div class="mb-2">
                <a href="#" class="font-semibold leading-tight text-2xl text-gray-100 hover:text-gray-100">
                Bootstrap Card's Title using Tailwind
                </a>
            </div>
            <div class='flex text-gray-200 text-sm '>
                <div class="pr-3">May 6, 2020</div> 
                <div>Posted by Admin</div>
            </div>
        </div>
    </div>
</div>
```
