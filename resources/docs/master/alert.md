<h1 class="text-gray-700 font-bold text-2xl md:text-3xl leading-snug">Tailwind Alert | Bootstrap Alert using Tailwind CSS </h1>

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

<h2 class="font-bold mb-4 text-gray-700 text-xl mt-16">Tailwind Alert with left side icons</h3>
<p class="mt-4 mb-2 leading-relaxed text-gray-700">Tailwindcss alert with left side icons is presented here.</p>
<div class="p-4 border rounded-t-lg bg-gray-300 flex justify-center">
    <div x-data="{ show: true }" x-show="show" class="w-11/12 md:w-3/5 bg-white my-2 rounded-r-md px-6 border-l-4 -ml-4 border-blue-500">
        <div class="flex items-center py-4">
            <i class="fas fa-info-circle fill-current text-4xl text-gray-700"></i>
            <div class="ml-5">
                <h1 class="text-lg font-bold mb-2">Well done!</h1>
                <p class="text-gray-700 my-0 leading-tight">You successfully read this important alert message.</p>
            </div>
            <div>
                <button type="button" @click="show = false"  class=" text-yellow-700 outline-none">
                    <span class="text-2xl">&times;</span>
                </button>
            </div>
        </div>
    </div>
</div>

```html
<div x-data="{ show: true }" x-show="show" class="w-11/12 md:w-3/5 bg-white my-2 rounded-r-md px-6 border-l-4 -ml-4 border-blue-500">
    <div class="flex items-center py-4">
        <i class="fas fa-info-circle fill-current text-4xl text-gray-700"></i>
        <div class="ml-5">
            <h1 class="text-lg font-bold">Well done!</h1>
            <p class="text-gray-700 my-0">You made your awesome tailwind css alert.</p>
        </div>
        <div>
            <button type="button" @click="show = false"  class=" text-yellow-700 outline-none">
                <span class="text-2xl">&times;</span>
            </button>
        </div>
    </div>
</div>
```

<h2 class="font-bold mb-4 text-gray-700 text-xl mt-16">Tailwind success Alert with left side icons</h3>
<p class="mt-4 mb-2 leading-relaxed text-gray-700">Tailwindcss success alert with left side icons is presented here.</p>
<div class="p-4 border rounded-t-lg bg-gray-300 flex justify-center">
    <div x-data="{ show: true }" x-show="show" class="w-11/12 md:w-3/5 bg-white my-2 rounded-r-md px-6 border-l-4 -ml-4 border-gray-100 bg-green-500">
        <div class="flex items-center py-4">
            <i class="fas fa-check border-2 border-gray-200 px-2 rounded-full fill-current text-4xl font-light text-gray-200"></i>
            <div class="ml-5">
                <h1 class="text-lg font-bold text-gray-200 mb-2">Well done!</h1>
                <p class="text-gray-300 leading-tight my-0">You successfully read this important alert message.</p>
            </div>
            <div>
                <button type="button"  @click="show = false"  class=" text-yellow-100">
                    <span class="text-2xl">&times;</span>
                </button>
            </div>
        </div>
    </div>
</div>

```html
 <div x-data="{ show: true }" x-show="show" class="w-11/12 md:w-3/5 bg-white my-2 rounded-r-md px-6 border-l-4 -ml-4 border-gray-100 bg-green-500">
    <div class="flex items-center py-4">
        <i class="fas fa-check border-2 border-gray-200 px-2 rounded-full fill-current text-4xl font-light text-gray-200"></i>
        <div class="ml-5">
            <h1 class="text-lg font-bold text-gray-200">Well done!</h1>
            <p class="text-gray-300 my-0">You successfully read this important alert message.</p>
        </div>
        <div>
            <button type="button"  @click="show = false"  class=" text-yellow-100">
                <span class="text-2xl">&times;</span>
            </button>
        </div>
    </div>
</div>
```

<h2 class="font-bold mb-4 text-gray-700 text-xl mt-16">Tailwind danger Alert with left side icons</h3>
<p class="mt-4 mb-2 leading-relaxed text-gray-700">Tailwindcss danger alert with left side icons is presented here.</p>
<div class="p-4 border rounded-t-lg bg-gray-300 flex justify-center">
    <div x-data="{ show: true }" x-show="show" class="w-11/12 md:w-3/5 bg-white my-2 rounded-r-md px-6 border-l-4 -ml-4 border-gray-100 bg-yellow-400">
        <div class="flex items-center py-4">
            <i class="fas fa-exclamation-circle rounded-full fill-current text-4xl text-gray-800"></i>
            <div class="ml-5">
                <h1 class="font-bold text-gray-800 text-lg mb-2">Warning !!!</h1>
                <p class="text-gray-800 leading-tight my-0">Warning! Better check yourself, you're not looking too good.</p>
            </div>
            <div>
                <button type="button" @click="show = false"  class=" text-yellow-100">
                    <span class="text-2xl text-gray-800">&times;</span>
                </button>
            </div>
        </div>
    </div>
</div>

```html
<div x-data="{ show: true }" x-show="show" class="w-11/12 md:w-3/5 bg-white my-2 rounded-r-md px-6 border-l-4 -ml-4 border-gray-100 bg-yellow-400">
    <div class="flex items-center py-4">
        <i class="fas fa-exclamation-circle rounded-full fill-current text-4xl text-gray-800"></i>
        <div class="ml-5">
            <h1 class="font-bold text-gray-800 text-lg">Warning !!!</h1>
            <p class="text-gray-800 my-0 ">Warning! Better check yourself, you're not looking too good.</p>
        </div>
        <div>
            <button type="button" @click="show = false"  class=" text-yellow-100">
                <span class="text-2xl text-gray-800">&times;</span>
            </button>
        </div>
    </div>
</div>
```

<div class="p-6 border rounded-t-lg text-center mt-16" style="font-family:Roboto">
    <a href="/editors/tailwind-css-alert-with-icons-on-left-605f0534917a" class="leading-tight bg-blue-600 hover:text-gray-100 text-gray-200 rounded px-6 py-3 text-sm">Try Online</a>
</div>
