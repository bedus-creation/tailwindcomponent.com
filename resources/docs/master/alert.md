# Bootstrap Alert using Tailwind CSS

<hr class="border-gray-200">

## Basic Alert

Here is a simple alert alert example using Tailwindcss.
<div class="bg-teal-200 relative text-teal-600 py-3 px-3 rounded">
    A simple info alert—check it out!
</div>

```html
<div class="bg-teal-200 relative text-teal-600 py-3 px-3 rounded">
    A simple info alert—check it out!
</div>
```
<div class="mt-2 bg-gray-200 relative text-gray-600 py-3 px-3 rounded">
    A simple secondary alert—check it out!
</div>

```html
<div class="bg-gray-200 relative text-gray-600 py-3 px-3 rounded">
    A simple secondary alert—check it out!
</div>
```

<div class="bg-yellow-200 relative text-yellow-600 py-3 px-3 rounded">
    A simple warning alert—check it out!
</div>

```html
<div class="bg-yellow-200 relative text-yellow-600 py-3 px-3 rounded">
    A simple warning alert—check it out!
</div>
```
<div class="mt-2 bg-red-200 relative text-red-500 py-3 px-3 rounded">
    A simple danger alert—check it out!
</div>

```html
<div class="bg-red-200 relative text-red-500 py-3 px-3 rounded">
    A simple danger alert—check it out!
</div>
```

## Alert with Dismissing Button
<div class="flex justify-between items-center bg-yellow-200 relative text-yellow-600 py-2 px-3 rounded">
    <div>
        <span class="font-semibold text-yellow-700">Bummer !!!</span>
        A simple warning alert—check it out!
    </div>
    <div>
        <button type="button" class=" text-yellow-700">
            <span class="text-2xl">&times;</span>
        </button>
    </div>
</div>

```html
<div class="flex justify-between items-center bg-yellow-200 relative text-yellow-600 py-2 px-3 rounded">
    <div>
        <span class="font-semibold text-yellow-700">Bummer !!!</span>
        A simple warning alert—check it out!
    </div>
    <div>
        <button type="button" class=" text-yellow-700">
            <span class="text-2xl">&times;</span>
        </button>
    </div>
</div>
```
## Javascript behavior using alpine js
Javascript behaviour can achieve using aphine js. [Alpine js](https://github.com/alpinejs/alpine) is a rugged, minimal framework for composing JavaScript behavior in your markup. 
<div x-data="{ show: true }" x-show="show"
    class="my-2 flex justify-between items-center bg-yellow-200 relative text-yellow-600 py-2 px-3 rounded">
    <div>
        <span class="font-semibold text-yellow-700">Bummer !!!</span>
        A simple warning alert—check it out!
    </div>
    <div>
        <button type="button" @click="show = false" class=" text-yellow-700">
            <span class="text-2xl">&times;</span>
        </button>
    </div>
</div>

```html
<div x-data="{ show: true }" x-show="show"
    class="flex justify-between items-center bg-yellow-200 relative text-yellow-600 py-2 px-3 rounded">
    <div>
        <span class="font-semibold text-yellow-700">Bummer !!!</span>
        A simple warning alert—check it out!
    </div>
    <div>
        <button type="button" @click="show = false" class=" text-yellow-700">
            <span class="text-2xl">&times;</span>
        </button>
    </div>
</div>
```
