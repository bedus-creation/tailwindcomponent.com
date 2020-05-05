# Bootstrap like Dropdown using tailwind css and alpine js.

<hr class="border-gray-200">

## Basic Dropdowns
Here is an example of basic bootstrap dropdown using tailwind css and alpine js.


<div x-data="{ show: false }" class="mb-2">
    <button @click="show = ! show" type="button" class="flex bg-blue-600 text-gray-200 rounded px-2 py-1">
    <span class="pr-2">Dropdown Buttons</span> 
        <svg class="fill-current text-gray-200" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M7 10l5 5 5-5z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
    </button>
    <div x-show="show" class="absolute bg-gray-200 z-10 shadow-md" style="min-width:10rem">
        <a class="block px-3 py-1" href="#">Link 1</a>
        <a class="block px-3 py-1" href="#">Link 2</a>
        <a class="block px-3 py-1" href="#">Link 3</a>
    </div>
</div>


```html
<div x-data="{ show: false }">
    <button @click="show = ! show" type="button" class="flex bg-blue-600 text-gray-200 rounded px-2 py-1">
    <span class="pr-2">Dropdown Buttons</span> 
        <svg class="fill-current text-gray-200" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M7 10l5 5 5-5z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
    </button>
    <div x-show="show" class="absolute bg-gray-200 z-10" style="min-width:10rem">
        <a class="block px-3 py-1" href="#">Link 1</a>
        <a class="block px-3 py-1" href="#">Link 2</a>
        <a class="block px-3 py-1" href="#">Link 3</a>
    </div>
</div>
```

## Dropdown Divider
Example of Dropdown divider using tailwind css and alpine js.


<div x-data="{ show: false }" class="mb-2">
    <button @click="show = ! show" type="button" class="flex bg-blue-600 text-gray-200 rounded px-2 py-1">
    <span class="pr-2">Dropdown Buttons</span> 
        <svg class="fill-current text-gray-200" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M7 10l5 5 5-5z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
    </button>
    <div x-show="show" class="absolute bg-gray-200 z-10 shadow-md" style="min-width:10rem">
        <a class="block px-3 py-1" href="#">Link 1</a>
        <a class="block px-3 py-1" href="#">Link 2</a>
        <a class="block px-3 py-1" href="#">Link 3</a>
        <hr class="border-gray-300 my-1">
        <a class="block px-3 py-1" href="#">Another Link</a>
    </div>
</div>

```html
<div x-data="{ show: false }" class="mb-2">
    <button @click="show = ! show" type="button" class="flex bg-blue-600 text-gray-200 rounded px-2 py-1">
    <span class="pr-2">Dropdown Buttons</span> 
        <svg class="fill-current text-gray-200" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M7 10l5 5 5-5z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
    </button>
    <div x-show="show" class="absolute bg-gray-200 z-10 shadow-md" style="min-width:10rem">
        <a class="block px-3 py-1" href="#">Link 1</a>
        <a class="block px-3 py-1" href="#">Link 2</a>
        <a class="block px-3 py-1" href="#">Link 3</a>
        <hr class="border-gray-300 my-1">
        <a class="block px-3 py-1" href="#">Another Link</a>
    </div>
</div>
```
