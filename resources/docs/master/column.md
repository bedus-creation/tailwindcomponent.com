<h1 class="text-gray-700 font-bold text-2xl md:text-3xl leading-snug">Tailwind Columns</h1>

<hr class="border-t-2 border-b-0 border-gray-100 mt-2 mb-8">

<h2 class="font-bold mb-4 text-gray-700 text-xl">Tailwind Three Columns Responsive example</h2>
<p class="my-4 leading-relaxed text-gray-700">Here is the example of three column responsive website example using tailwind css. Use flex in the wrapper <b>div</b> and use tailwind class for width percent to achieve the columns in tailwind css.</p>
<div class="p-4 border rounded-t-lg">
    <div class="md:flex">
        <div class="w-full md:w-1/3 bg-green-200">First Column</div>
        <div class="w-full md:w-1/3 bg-green-400">second Column</div>
        <div class="w-full md:w-1/3 bg-green-200">Third Column</div>
    </div>
</div>


```html
<div class="md:flex">
    <div class="w-full md:w-1/3 bg-green-200">First Column</div>
    <div class="w-full md:w-1/3 bg-green-400">second Column</div>
    <div class="w-full md:w-1/3 bg-green-200">Third Column</div>
</div>
```


<h2 class="font-bold mb-4 text-gray-700 text-xl mt-16">Three columns responsive with margin separated.</h2>
<p class="my-4 leading-relaxed text-gray-700">
Use negative margin with flex in wrapper ```div``` tag and then apply margin to each components.</p>
<div class="p-4 border rounded-t-lg">
    <div class="md:flex md:-mx-4">
        <div class="w-full md:mx-4 md:w-1/3 bg-green-200">First Column</div>
        <div class="w-full md:mx-4 md:w-1/3 bg-green-400">Second Column</div>
        <div class="w-full md:mx-4 md:w-1/3 bg-green-200">First Column</div>
    </div>
</div>

```html
<div class="md:flex md:-mx-4">
    <div class="w-full px-4 md:mx-4 md:w-1/3 bg-green-200">First Column</div>
    <div class="w-full px-4 md:mx-4 md:w-1/3 bg-green-400">Second Column</div>
    <div class="w-full px-4 md:mx-4 md:w-1/3 bg-green-200">First Column</div>
</div>
```


<h2 class="font-bold mb-4 text-gray-700 text-xl mt-16">Twelve columns example</h2>
<p class="my-4 leading-relaxed text-gray-700">Example of twelve columns with flex only.</p>
<div class="p-6 border text-center rounded-t-lg">
    <div class="flex">
        <div class="w-1/12 bg-green-100">First Column</div>
        <div class="w-1/12 bg-green-200">2nd Column</div>
        <div class="w-1/12 bg-green-300">3rd Column</div>
        <div class="w-1/12 bg-green-400">4th Column</div>
        <div class="w-1/12 bg-green-500">5th Column</div>
        <div class="w-1/12 bg-green-600">6th Column</div>
        <div class="w-1/12 bg-green-700">7th Column</div>
        <div class="w-1/12 bg-green-800">8th Column</div>
        <div class="w-1/12 bg-green-900">9th Column</div>
        <div class="w-1/12 bg-green-800">10 Column</div>
        <div class="w-1/12 bg-green-700">11th Column</div>
        <div class="w-1/12 bg-green-600">12th Column</div>
    </div>
</div>

```html
<div class="flex">
    <div class="w-1/12 bg-green-100">First Column</div>
    <div class="w-1/12 bg-green-200">2nd Column</div>
    <div class="w-1/12 bg-green-300">3rd Column</div>
    <div class="w-1/12 bg-green-400">4th Column</div>
    <div class="w-1/12 bg-green-500">5th Column</div>
    <div class="w-1/12 bg-green-600">6th Column</div>
    <div class="w-1/12 bg-green-700">7th Column</div>
    <div class="w-1/12 bg-green-800">8th Column</div>
    <div class="w-1/12 bg-green-900">9th Column</div>
    <div class="w-1/12 bg-green-800">10 Column</div>
    <div class="w-1/12 bg-green-700">11th Column</div>
    <div class="w-1/12 bg-green-600">12th Column</div>
</div>
```

<h2 class="font-bold mb-4 text-gray-700 text-xl mt-16">Role of Flex wrap</h2>
<p class="my-4 leading-relaxed text-gray-700">Flex sets all the content in one row even we set widths to 25% of each.</p>
<div class="p-6 border text-center rounded-t-lg">
    <div class="flex">
        <div class="w-1/4 h-20 flex items-center bg-green-100">First Column</div>
        <div class="w-1/4 h-20 flex items-center bg-green-200">2nd Column</div>
        <div class="w-1/4 h-20 flex items-center bg-green-300">3rd Column</div>
        <div class="w-1/4 h-20 flex items-center bg-green-400">4th Column</div>
        <div class="w-1/4 h-20 flex items-center bg-green-100">First Column</div>
        <div class="w-1/4 h-20 flex items-center bg-green-200">2nd Column</div>
        <div class="w-1/4 h-20 flex items-center bg-green-300">3rd Column</div>
        <div class="w-1/4 h-20 flex items-center bg-green-400">4th Column</div>
    </div>
</div>

```html
<div class="flex">
    <div class="w-1/4 h-20 flex items-center bg-green-100">First Column</div>
    <div class="w-1/4 h-20 flex items-center bg-green-200">2nd Column</div>
    <div class="w-1/4 h-20 flex items-center bg-green-300">3rd Column</div>
    <div class="w-1/4 h-20 flex items-center bg-green-400">4th Column</div>
    <div class="w-1/4 h-20 flex items-center bg-green-100">First Column</div>
    <div class="w-1/4 h-20 flex items-center bg-green-200">2nd Column</div>
    <div class="w-1/4 h-20 flex items-center bg-green-300">3rd Column</div>
    <div class="w-1/4 h-20 flex items-center bg-green-400">4th Column</div>
</div>
```

<h2 class="font-bold mb-4 text-gray-700 text-xl">Four Columns example with flex wrap.</h2>
<p class="my-4 leading-relaxed text-gray-700">In the above example we have set width to 25% however it all the columns are set in one row. To go columns in next row use flex wrap.</p>
<div class="p-6 border text-center rounded-t-lg">
    <div class="flex flex-wrap">
        <div class="w-1/4 h-20 flex items-center bg-green-100">First Column</div>
        <div class="w-1/4 h-20 flex items-center bg-green-200">2nd Column</div>
        <div class="w-1/4 h-20 flex items-center bg-green-300">3rd Column</div>
        <div class="w-1/4 h-20 flex items-center bg-green-400">4th Column</div>
        <div class="w-1/4 h-20 flex items-center bg-green-400">First Column</div>
        <div class="w-1/4 h-20 flex items-center bg-green-300">2nd Column</div>
        <div class="w-1/4 h-20 flex items-center bg-green-200">3rd Column</div>
        <div class="w-1/4 h-20 flex items-center bg-green-100">4th Column</div>
    </div>
</div>

```html
<div class="flex flex-wrap">
    <div class="w-1/4 h-20 flex items-center bg-green-100">First Column</div>
    <div class="w-1/4 h-20 flex items-center bg-green-200">2nd Column</div>
    <div class="w-1/4 h-20 flex items-center bg-green-300">3rd Column</div>
    <div class="w-1/4 h-20 flex items-center bg-green-400">4th Column</div>
    <div class="w-1/4 h-20 flex items-center bg-green-400">First Column</div>
    <div class="w-1/4 h-20 flex items-center bg-green-300">2nd Column</div>
    <div class="w-1/4 h-20 flex items-center bg-green-200">3rd Column</div>
    <div class="w-1/4 h-20 flex items-center bg-green-100">4th Column</div>
</div>
```
<h2 class="font-bold mb-4 text-gray-700 text-xl mt-16">Tailwind Container</h2>
<p class="my-4 leading-relaxed text-gray-700">Use container with mx-auto to center and with padding 20.</>
<div class="p-6 border rounded-t-lg">
    <div class="container mx-autp px-4 md:px-20">
        <div class="bg-green-600 text-gray-200 px-4 py-6">
        This is my content inside container
        </div>
    </div>
</div>

```html
<div class="container mx-autp px-4 md:px-20">
    <div class="bg-green-600 text-gray-200 px-4 py-6">
    This is my content inside container
    </div>
</div>
```

<h2 class="font-bold mb-4 text-gray-700 text-xl mt-16">Equal height three columns responsive inside a container.</h2>
<p class="my-4 leading-relaxed text-gray-700">Examples shows a full background and all the content inside a container, similar to bootstrap container. The container has three coulms of equal height which will becomes full height for mobile devices.</>
<div class="p-6 border rounded-t-lg">
    <div id="contacts" style="background-color: rgb(166, 105, 170);">
        <div class="container mx-auto md:px-20 px-2">
            <div class="flex flex-wrap justify-between break-all md:-mx-4">
                <div class="md:flex-1 w-full md:w-1/3 my-4 px-1">
                    <div class="bg-pink-100 h-full px-2 py-3">
                        <div class="flex mb-2">
                            <div><i class="fill-current material-icons text-gray-700"
                                    style="font-size: 0.875rem;">location_on</i></div>
                            <div class="ml-2 text-sm text-gray-800">899 Tillman Centers Apt. 797,North Charley</div>
                        </div>
                        <div class="flex mb-2">
                            <div><i class="fill-current material-icons text-gray-700"
                                    style="font-size: 0.875rem;">textsms</i></div>
                            <div class="ml-2 text-sm text-gray-800">430.208.4025</div>
                        </div>
                        <div class="flex">
                            <div><i class="fill-current material-icons text-gray-700"
                                    style="font-size: 0.875rem;">alternate_email</i></div>
                            <div class="ml-2 text-sm text-gray-800">heidenreich.wade@heller.com</div>
                        </div>
                    </div>
                </div>
                <div class="md:flex-1 w-full md:w-1/3 my-4 px-1">
                    <div class="bg-pink-100 h-full px-2 py-3">
                        <div class="flex mb-2">
                            <div><i class="fill-current material-icons text-gray-700"
                                    style="font-size: 0.875rem;">location_on</i></div>
                            <div class="ml-2 text-sm text-gray-800">7388 Mertie Ridge Suite 429,South Alene</div>
                        </div>
                        <div class="flex mb-2">
                            <div><i class="fill-current material-icons text-gray-700"
                                    style="font-size: 0.875rem;">textsms</i></div>
                            <div class="ml-2 text-sm text-gray-800">+1-625-328-6621</div>
                        </div>
                        <div class="flex">
                            <div><i class="fill-current material-icons text-gray-700"
                                    style="font-size: 0.875rem;">alternate_email</i></div>
                            <div class="ml-2 text-sm text-gray-800">jonathan.shanahan@yahoo.com</div>
                        </div>
                    </div>
                </div>
                <div class="md:flex-1 w-full md:w-1/3 my-4 px-1">
                    <div class="bg-pink-100 h-full px-2 py-3">
                        <div class="flex mb-2">
                            <div><i class="fill-current material-icons text-gray-700"
                                    style="font-size: 0.875rem;">location_on</i></div>
                            <div class="ml-2 text-sm text-gray-800">33152 Luna Land,Port Cameronborough</div>
                        </div>
                        <div class="flex mb-2">
                            <div><i class="fill-current material-icons text-gray-700"
                                    style="font-size: 0.875rem;">textsms</i></div>
                            <div class="ml-2 text-sm text-gray-800">(239) 884-5976 x78144</div>
                        </div>
                        <div class="flex">
                            <div><i class="fill-current material-icons text-gray-700"
                                    style="font-size: 0.875rem;">alternate_email</i></div>
                            <div class="ml-2 text-sm text-gray-800">mmcclure@yahoo.com</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="p-6 border text-center rounded-t-lg mt-16">
    <a href="/editors/3-columns-responsive-equal-height-columns-inside-container-a078fa8c348a" class="leading-tight bg-blue-600 hover:text-gray-100 text-gray-200 rounded px-6 py-3 text-sm">Try Online</a>
</div>
