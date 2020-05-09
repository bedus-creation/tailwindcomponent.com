# List group
Example of Bootstrap list group using tailwind css.
<ul class="px-0">
  <li class="border rounded-sm px-3 py-3" style='border-bottom-width:0'>List Item 1</li>
  <li class="border rounded-sm px-3 py-3" style='border-bottom-width:0'>List Item 2</li>
  <li class="border rounded-sm px-3 py-3" style='border-bottom-width:0'>List item 3</li>
  <li class="border rounded-sm px-3 py-3" style='border-bottom-width:0'>List Item 4</li>
  <li class="border rounded-sm px-3 py-3" >List Item 5</li>
</ul>

```html
<ul class="px-0">
  <li class="border rounded-sm px-3 py-3" style='border-bottom-width:0'>List Item 1</li>
  <li class="border rounded-sm px-3 py-3" style='border-bottom-width:0'>List Item 2</li>
  <li class="border rounded-sm px-3 py-3" style='border-bottom-width:0'>List item 3</li>
  <li class="border rounded-sm px-3 py-3" style='border-bottom-width:0'>List Item 4</li>
  <li class="border rounded-sm px-3 py-3" >List Item 5</li>
</ul>
```

## Active Items javascript behaviours

Use alpine js to acheive active items javascript behavious
<ul x-data="{ item: '1st' }" class="px-0">
  <li class="border rounded-sm px-3 py-3" :class="{ 'bg-blue-600 text-gray-200': item === '1st' }" @click="item = '1st'" style='border-bottom-width:0'>List Item 1</li>
  <li class="border rounded-sm px-3 py-3"  :class="{ 'bg-blue-600 text-gray-200': item === '2nd' }" @click="item = '2nd'" style='border-bottom-width:0'>List Item 2</li>
  <li class="border rounded-sm px-3 py-3"  :class="{ 'bg-blue-600 text-gray-200': item === '3rd' }" @click="item = '3rd'" style='border-bottom-width:0'>List item 3</li>
  <li class="border rounded-sm px-3 py-3"  :class="{ 'bg-blue-600 text-gray-200': item === '4th' }" @click="item = '4th'" style='border-bottom-width:0'>List Item 4</li>
  <li class="border rounded-sm px-3 py-3"  :class="{ 'bg-blue-600 text-gray-200': item === '5th' }" @click="item = '5th'">List Item 5</li>
</ul>

```html
<ul x-data="{ item: '1st' }" class="px-0">
  <li class="border rounded-sm px-3 py-3" :class="{ 'bg-blue-600 text-gray-200': item === '1st' }" @click="item = '1st'" style='border-bottom-width:0'>List Item 1</li>
  <li class="border rounded-sm px-3 py-3"  :class="{ 'bg-blue-600 text-gray-200': item === '2nd' }" @click="item = '2nd'" style='border-bottom-width:0'>List Item 2</li>
  <li class="border rounded-sm px-3 py-3"  :class="{ 'bg-blue-600 text-gray-200': item === '3rd' }" @click="item = '3rd'" style='border-bottom-width:0'>List item 3</li>
  <li class="border rounded-sm px-3 py-3"  :class="{ 'bg-blue-600 text-gray-200': item === '4th' }" @click="item = '4th'" style='border-bottom-width:0'>List Item 4</li>
  <li class="border rounded-sm px-3 py-3"  :class="{ 'bg-blue-600 text-gray-200': item === '5th' }" @click="item = '5th'">List Item 5</li>
</ul>
```

## Use with links
Here is example about how to use with links.
<ul class="px-0">
  <a href="#"><li class="border rounded-sm px-3 py-3" style='border-bottom-width:0'>List Item 1</li></a>
  <a href="#"><li class="border rounded-sm px-3 py-3" style='border-bottom-width:0'>List Item 2</li></a>
  <a href="#"><li class="border rounded-sm px-3 py-3" style='border-bottom-width:0'>List item 3</li></a>
  <a href="#"><li class="border rounded-sm px-3 py-3" style='border-bottom-width:0'>List Item 4</li></a>
  <a href="#"><li class="border rounded-sm px-3 py-3" >List Item 5</li></a>
</ul>

```html
<ul class="px-0">
  <a href="#"><li class="border rounded-sm px-3 py-3" style='border-bottom-width:0'>List Item 1</li></a>
  <a href="#"><li class="border rounded-sm px-3 py-3" style='border-bottom-width:0'>List Item 2</li></a>
  <a href="#"><li class="border rounded-sm px-3 py-3" style='border-bottom-width:0'>List item 3</li></a>
  <a href="#"><li class="border rounded-sm px-3 py-3" style='border-bottom-width:0'>List Item 4</li></a>
  <a href="#"><li class="border rounded-sm px-3 py-3" >List Item 5</li></a>
</ul>
```

## Company Job Listing
Company job listing example is presented here.

<div class="flex justify-center">

![Company List example using Tailwind css](/assets/docs/master/image-02.png)

</div>

```html
<div class="bg-gray-100 w-1/2 rounded px-6">
    <div class="border-l-4 border-red-400 -ml-6 pl-6 flex items-center justify-between my-4">
        <div class="font-semibold text-gray-800">Company Highlights</div>
        <div class="text-red-400">See all</div>
    </div>
    <hr class="-mx-6"/>
    <div class="flex items-center justify-between my-4">
        <div class="w-16">
        <img class="w-12 h-12 rounded-full" src="https://source.unsplash.com/50x50/?nature">
        </div>
        <div class="flex-1 pl-2">
            <div class="text-gray-700 font-semibold">
            PHP Developers
            </div>
            <div class="text-gray-600 font-thin">
            Web House
            </div>
        </div>
        <div class="text-red-400">20 Posts</div>
    </div>
    <hr class="boder-b-0 my-4"/>
    <div class="flex items-center my-4">
        <div class="w-16">
        <img class="w-12 h-12 rounded-full" src="https://source.unsplash.com/50x50/?water">
        </div>
        <div class="flex-1 pl-2">
            <div class="text-gray-700 font-semibold">
            Designer
            </div>
            <div class="text-gray-600 font-thin">
            Web House
            </div>
        </div>
        <div class="text-red-400">300 Posts</div>
    </div>
    <hr class="boder-b-0 my-4"/>
    <div class="flex items-center my-4">
        <div class="w-16">
        <img class="w-12 h-12 rounded-full" src="https://source.unsplash.com/50x50/?logo">
        </div>
        <div class="flex-1 pl-2">
            <div class="text-gray-700 font-semibold">
            Data Entry
            </div>
            <div class="text-gray-600 font-thin">
            Web House
            </div>
        </div>
        <div class="text-red-400">30 Posts</div>
    </div>
</div>
```

<a class="float-right bg-blue-600 text-gray-200 hover:text-gray-100 rounded px-3 py-2" href="http://tailwindcomponent.com/editors/company-list-example-using-tailwind-css-8ee8e7434ed4">Try Your self</a>
