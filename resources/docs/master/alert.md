<h1 class="text-gray-700 font-bold text-2xl md:text-3xl leading-snug"> Bootstrap Alert using Tailwind CSS </h1>

<hr class="border-t-2 border-b-0 border-gray-100 mt-2 mb-8">

<h2 class="font-bold mb-4 text-gray-700 text-xl"> Info Alert</h2>

<p class="my-4 leading-relaxed text-gray-700">Here is a simple bootrstap like alert example using Tailwindcss.</p>
<div class="p-4 border rounded-t-lg">
    <div class="bg-teal-200 relative text-teal-600 py-3 px-3 rounded-lg">
        A simple info alert—check it out!
    </div>
</div>

```html
<div class="bg-teal-200 relative text-teal-600 py-3 px-3 rounded-lg">
    A simple info alert—check it out!
</div>
```


<h2 class="font-bold mb-4 text-gray-700 text-xl mt-16">Secondary Alert</h3>
<p class="my-4 leading-relaxed text-gray-700">Here is a simple bootrstap like secondary alert example using Tailwindcss.</p>
<div class="p-4 border rounded-t-lg">
    <div class="mt-2 bg-gray-200 relative text-gray-600 py-3 px-3 rounded-lg">
        A simple secondary alert—check it out!
    </div>
</div>

```html
<div class="bg-gray-200 relative text-gray-600 py-3 px-3 rounded-lg">
    A simple secondary alert—check it out!
</div>
```

<h2 class="font-bold mb-4 text-gray-700 text-xl mt-16">Warning Alert</h3>
<p class="my-4 leading-relaxed text-gray-700">Here is a simple bootrstap like warning alert example using Tailwindcss.</p>
<div class="p-4 border rounded-t-lg">
    <div class="bg-yellow-200 relative text-yellow-600 py-3 px-3 rounded-lg">
        A simple warning alert—check it out!
    </div>
</div>

```html
<div class="bg-yellow-200 relative text-yellow-600 py-3 px-3 rounded-lg">
    A simple warning alert—check it out!
</div>
```

<h2 class="font-bold mb-4 text-gray-700 text-xl mt-16">Danger Alert</h3>
<p class="my-4 leading-relaxed text-gray-700">Here is a simple bootrstap like Danger alert example using Tailwindcss.</p>
<div class="p-4 border rounded-t-lg">
    <div class="mt-2 bg-red-200 relative text-red-500 py-3 px-3 rounded-lg">
        A simple danger alert—check it out!
    </div>
</div>

```html
<div class="bg-red-200 relative text-red-500 py-3 px-3 rounded-lg">
    A simple danger alert—check it out!
</div>
```

<h2 class="font-bold mb-4 text-gray-700 text-xl mt-16">Alert example with dismissing button</h3>
<p class="mt-4 mb-2 leading-relaxed text-gray-700">Here is a simple Alert example with dismissing button using Tailwindcss.</p>
<div class="p-4 border rounded-t-lg">
    <div class="flex justify-between items-center bg-yellow-200 relative text-yellow-600 py-3 px-3 rounded-lg">
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
</div>

```html
<div class="flex justify-between items-center bg-yellow-200 relative text-yellow-600 py-3 px-3 rounded-lg">
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

<h2 class="font-bold mb-4 text-gray-700 text-xl mt-16"> Javascript behavior using alpine js</h3>
<p class="mt-4 mb-2 leading-relaxed text-gray-700">Javascript behaviour can achieve using <a href="https://github.com/alpinejs/alpine" class="font-bold">Alpinejs</a>. It is a rugged, minimal framework for composing JavaScript behavior in your markup. </p>
<div class="p-4 border rounded-t-lg">
    <div x-data="{ show: true }" x-show="show"
        class="my-2 flex justify-between items-center bg-yellow-200 relative text-yellow-600 py-3 px-3 rounded-lg">
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
</div>

```html
<div x-data="{ show: true }" x-show="show"
    class="flex justify-between items-center bg-yellow-200 relative text-yellow-600 py-3 px-3 rounded-lg">
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
