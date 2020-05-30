<h1 class="text-gray-700 font-bold text-2xl md:text-3xl leading-snug">Tailwind Tooltip</h1>

<hr class="border-t-2 border-b-0 border-gray-100 mt-2 mb-8">

<h2 class="font-bold mb-4 text-gray-700 text-xl">Tailwind Tooltip Example</h2>
<p class="my-4 leading-relaxed text-gray-700">Tailwind doesnot support tooltip out of the box. We use tippy js for tooltip and <a href="/component/popover">Tailwind Popover</a> to acheive bootstrap style tooltips and popovers.[tippy js uses popper js library under the hood in which bootstrap directly uses popper js to achieve tooltip and popovers]. Here we explain the how to make tooltips using tippy js with tailwind css in step by step.</p>
<div class="flex justify-center p-4 border rounded-t-lg">
    <img src="/assets/docs/master/image-12.png">
</div>
<div class="p-6 border text-center rounded-t-lg mt-16">
    <a href="/editors/tooltips-hovers-update-2-34b133d0af55" class="leading-tight bg-blue-600 hover:text-gray-100 text-gray-200 rounded px-6 py-3 text-sm">Try Online</a>
</div>


<h2 class="font-bold mb-4 text-gray-700 mt-16 text-xl">Step 1: First add Tippy Js from CDN as follows</h2>
<p class="my-4 leading-relaxed text-gray-700">You can use either cdn or npm and yarn to install tippy js. CDN for tooltips is given below, Please refer to tippy js websites for detail information. <a alt="Tippy Js Installtion Detail guides" href="https://atomiks.github.io/tippyjs/v6/getting-started/">Tippy Js Installtion Detail guides</a></p>

```html
<!-- Development -->
<script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.min.js"></script>
<script src="https://unpkg.com/tippy.js@6/dist/tippy-bundle.umd.js"></script>

<!-- Production -->
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://unpkg.com/tippy.js@6"></script>
```

<h2 class="font-bold mb-4 text-gray-700 mt-16 text-xl">Step 2: Add Buttons for Tooltips</h2>
<p class="my-4 leading-relaxed text-gray-700">We are adding four buttons from <a href="component/button">Button</a> section for left, right, top and button tooltips. Use data-title and data-placement properties for data and placement respectively.</p>

```html
<button type="button" data-title='This is right tooltip' data-placement="right" class="bg-blue-600 text-gray-200 rounded hover:bg-blue-500 px-4 py-2 focus:outline-none">Right</button>
<button type="button" data-title='This is bottom tooltip' data-placement="bottom" class="bg-gray-600 text-gray-100 rounded hover:bg-gray-500 px-4 py-2 focus:outline-none">Bottom</button>
<button type="button" data-title='This is top tooltip' data-placement="top" class="bg-green-500 text-gray-100 rounded hover:bg-green-400 px-4 py-2 focus:outline-none">Top</button>
<button type="button" data-title='This is left tooltip' data-placement="left" class="bg-red-500 text-gray-200 rounded hover:bg-red-400 px-4 py-2 focus:outline-none">Left</button>
```

<h2 class="font-bold mb-4 text-gray-700 mt-16 text-xl">Step 3: Initialize tooltip scripts.</h2>
<p class="my-4 leading-relaxed text-gray-700">We are dynamically reding data content from <b>data-title</b> attributes and placement is from <b>data-placement</b> attributes. You can customize the name of attributes as your need.</p>

```html
<script>
tippy('button', {
    content:(reference)=>reference.getAttribute('data-title'),
    onMount(instance) {
        instance.popperInstance.setOptions({
        placement :instance.reference.getAttribute('data-placement')
        });
    }
});
</script>
```

<div class="p-6 border text-center rounded-t-lg mt-16">
    <a href="/editors/tooltips-hovers-update-2-34b133d0af55" class="leading-tight bg-blue-600 hover:text-gray-100 text-gray-200 rounded px-6 py-3 text-sm">Try Online</a>
</div>
