<h1 class="text-gray-700 font-bold text-2xl md:text-3xl leading-snug">Bootstrap like Dropdown using tailwind css and alpine js</h1>

<hr class="border-t-2 border-b-0 border-gray-100 mt-2 mb-8">

<h2 class="font-bold mb-4 text-gray-700 text-xl">Basic Dropdowns</h2>
<p class="my-4 leading-relaxed text-gray-700">Here is an example of basic bootstrap dropdown using tailwind css and alpine js.</p>
<div class="flex justify-center p-4 border rounded-t-lg" style="font-family:Roboto">
    <div x-data="{show: false}" @click.away="show = false">
        <button @click="show = ! show" class="block bg-blue-600 bg-blue-600 text-gray-200 rounded-lg px-6 text-sm py-3 overflow-hidden border-2 border-gray-600 focus:outline-none focus:border-white">
            <div class="flex">
                <span>Dropdown Buttons</span> 
                <svg class="fill-current text-gray-200" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M7 10l5 5 5-5z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
            </div>
        </button>
        <div x-show="show" class="mt-2 py-2 w-48 bg-white rounded-lg shadow-xl">
            <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">Account settings</a>
            <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">Support</a>
            <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">Sign out</a>
        </div>
    </div>
</div>


```html
<div x-data="{show: false}" @click.away="show = false">
    <button @click="show = ! show" class="block bg-blue-600 bg-blue-600 text-gray-200 rounded-lg px-6 text-sm py-3 overflow-hidden border-2 border-gray-600 focus:outline-none focus:border-white">
        <div class="flex">
            <span>Dropdown Buttons</span> 
            <svg class="fill-current text-gray-200" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M7 10l5 5 5-5z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
        </div>
    </button>
    <div x-show="show" class="mt-2 py-2 w-48 bg-white rounded-lg shadow-xl">
        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">Account settings</a>
        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">Support</a>
        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">Sign out</a>
    </div>
</div>
```

<h2 class="font-bold mb-4 text-gray-700 text-xl mt-16">Bootstrap style Dropdowns</h2>
<p class="my-4 leading-relaxed text-gray-700">Example of Dropdown divider using tailwind css and alpine js.</p>
<div class="flex justify-center p-4 border rounded-t-lg" style="font-family:Roboto">
    <div x-data="{ show: false }"  @click.away="show = false" class="mb-2">
        <button @click="show = ! show" type="button" class="flex bg-blue-600 text-gray-200 rounded-lg px-6 py-3 focus:outline-none focus:border-white text-sm">
        <span class="pr-2">Dropdown Buttons</span> 
            <svg class="fill-current text-gray-200" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M7 10l5 5 5-5z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
        </button>
        <div x-show="show" class="absolute bg-gray-100 z-10 shadow-md" style="min-width:10rem">
            <a class="block px-3 py-2" href="#">Link 1</a>
            <a class="block px-3 py-2" href="#">Link 2</a>
            <a class="block px-3 py-2" href="#">Link 3</a>
            <hr class="border-t border-gray-200 my-0">
            <a class="block px-3 py-2" href="#">Another Link</a>
        </div>
    </div>
</div>


```html
<div x-data="{ show: false }"  @click.away="show = false" class="mb-2">
    <button @click="show = ! show" type="button" class="flex bg-blue-600 text-gray-200 rounded-lg px-6 py-3 focus:outline-none focus:border-white text-sm">
    <span class="pr-2">Dropdown Buttons</span> 
        <svg class="fill-current text-gray-200" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M7 10l5 5 5-5z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
    </button>
    <div x-show="show" class="absolute bg-gray-100 z-10 shadow-md" style="min-width:10rem">
        <a class="block px-3 py-2" href="#">Link 1</a>
        <a class="block px-3 py-2" href="#">Link 2</a>
        <a class="block px-3 py-2" href="#">Link 3</a>
        <hr class="border-t border-gray-200 my-0">
        <a class="block px-3 py-2" href="#">Another Link</a>
    </div>
</div>
```
