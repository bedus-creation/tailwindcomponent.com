<h1 class="text-gray-700 font-bold text-2xl md:text-3xl leading-snug">Tailwind Popovers</h1>

<hr class="border-t-2 border-b-0 border-gray-100 mt-2 mb-8">

<h2 class="font-bold mb-4 text-gray-700 text-xl">Tailwind Popovers Example.</h2>
<p class="my-4 leading-relaxed text-gray-700">Pictures shows below is a example of popovers that is made by using tailwind css. This page explains how to make tailwind popovers with full customization using tippy js in step wise fashion.</p>
<div class="flex justify-center p-4 border rounded-t-lg">
    <img src="/assets/docs/master/image-09.png">
</div>

<div class="p-6 border text-center rounded-t-lg mt-16">
    <a href="/editors/tailwind-tippy-js-5b0f4e770497" class="leading-tight bg-blue-600 hover:text-gray-100 text-gray-200 rounded px-6 py-3 text-sm">Try Online</a>
</div>

<h2 class="font-bold mb-4 text-gray-700 mt-16 text-xl">Step 1: First add Tippy Js from CDN as follows</h2>
<p class="my-4 leading-relaxed text-gray-700">You can also use npm and yarn to install tippy js. Please refer to tippy js websites for detail information. <a alt="Tippy Js Installtion Detail guides" href="https://atomiks.github.io/tippyjs/v6/getting-started/">Tippy Js Installtion Detail guides</a></p>

```html
<!-- Development -->
<script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.min.js"></script>
<script src="https://unpkg.com/tippy.js@6/dist/tippy-bundle.umd.js"></script>

<!-- Production -->
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://unpkg.com/tippy.js@6"></script>
```

<h2 class="font-bold mb-4 text-gray-700 mt-16 text-xl">Step 2: Draw Layouts</h2>
<p class="my-4 leading-relaxed text-gray-700">Add a Button in which tooltips will show when it hovers. And a html block for tooltips layout. In below example button will be the tooltip action button and <b>display:none</b> html block will be the tooltip layouts that I have added some tailwind css classes for styling. </p>

```html
<button>Text</button>
<div style="display: none;">
    <div id="one">
        <div class="bg-white shadow-l">
        <div class="px-3 py-2 font-bold text-gray-700 bg-gray-100">Popover title</div>
        <div class="px-3 py-3 text-gray-600">And here's some amazing content. It's very engaging. Right?</div>
    </div>
</div>
```

<h2 class="font-bold mb-4 text-gray-700 mt-16 text-xl">Step 3: Initialize Tippy Js</h2>
<p class="my-4 leading-relaxed text-gray-700">Add below scripts anywhere in the page to initialize the tippy js, which results similar as in below image.</p>

```html
<script>
tippy('button', {
    content:document.getElementById('one').innerHTML,
    allowHTML: true,
});
</script>
```

<div class="flex justify-center p-4 border rounded-t-lg mt-16">
    <img src="/assets/docs/master/image-10.png">
</div>


<div class="p-6 border text-center rounded-t-lg mt-16">
    <a href="/editors/tippy-js-minimal-304d890a561d" class="leading-tight bg-blue-600 hover:text-gray-100 text-gray-200 rounded px-6 py-3 text-sm">Try Online</a>
</div>

<h2 class="font-bold mb-4 text-gray-700 mt-16 text-xl">Step 4: UI customization</h2>
<p class="my-4 leading-relaxed text-gray-700">
Remove tippy js content padding to remove that black spaces around popovers by adding following css. 
</p>

```html
<style>
.tippy-content{
  padding:0 !important;
}
</style>
```

<h2 class="font-bold mb-4 text-gray-700 mt-16 text-xl">Step 4: Popover Positions</h2>
<p class="my-4 leading-relaxed text-gray-700">Use placement props in tippy contructor to define the placements. Available options are <b>top</b>, <b>bottom</b>, <b>left</b>, <b>right</b></p>

```html
<script>
tippy('button', {
    content:document.getElementById('one').innerHTML,
    allowHTML: true,
    placement:'bottom',
});
</script>
```

<h2 class="font-bold mb-4 text-gray-700 mt-16 text-xl">Step 5: Tailwind Popover Dynamic positions with <b>data-placement</b> properties.</h2>
<p class="my-4 leading-relaxed text-gray-700">In this example we are adding four popovers button with dynamic positions set by data-placement properties.</p>
<div class="flex justify-center p-4 border rounded-t-lg mt-16">
    <img src="/assets/docs/master/image-11.png">
</div>

<h2 class="font-bold mb-4 text-gray-700 mt-16 text-xl">Step 5.1: Add Buttons with data-placement options.</h2>

```html
<button type="button" data-template='one' data-placement="right" class="bg-blue-600 text-gray-200 rounded hover:bg-blue-500 px-4 py-2 focus:outline-none">Primary</button>
<button type="button" data-template='one' data-placement="bottom" class="bg-gray-600 text-gray-100 rounded hover:bg-gray-500 px-4 py-2 focus:outline-none">Secondary</button>
<button type="button" data-template='one' data-placement="top" class="bg-green-500 text-gray-100 rounded hover:bg-green-400 px-4 py-2 focus:outline-none">Success</button>
<button type="button" data-template='one' data-placement="left" class="bg-red-500 text-gray-200 rounded hover:bg-red-400 px-4 py-2 focus:outline-none">Danger</button>
```

<h2 class="font-bold mb-4 text-gray-700 mt-16 text-xl">Step 5.2: Update the scripts.</h2>

```html
<script>
tippy('button', {
    content(reference) {
    const id = reference.getAttribute('data-template');
    const template = document.getElementById(id);
    return template.innerHTML;
    },
    onMount(instance) {
        instance.popperInstance.setOptions({
        placement :instance.reference.getAttribute('data-placement')
        });
    },
    allowHTML: true,
    theme: 'white',
    trigger: 'click', 
});
</script>
```

<div class="p-6 border text-center rounded-t-lg mt-16">
    <a href="/editors/dynamic-position-and-content-40b5fb8d88c9" class="leading-tight bg-blue-600 hover:text-gray-100 text-gray-200 rounded px-6 py-3 text-sm">Try Online</a>
</div>

<h2 class="font-bold mb-4 text-gray-700 mt-16 text-xl">Step 6: Tooltip Arrow color Customization</h2>
<p class="my-4 leading-relaxed text-gray-700">Style the css properties for a theme and later use that theme to apply the effect to arrow. For example we apply the white color to a thame named <b>customtheme.</b>. And use this theme while initializing the tippy instance.</p>

```html
<style>
.tippy-box[data-theme~='customtheme'] {
  background-color: white;
}
.tippy-box[data-theme~='customtheme'][data-placement^='top'] > .tippy-arrow::before {
  border-top-color: white;
}
.tippy-box[data-theme~='customtheme'][data-placement^='bottom'] > .tippy-arrow::before {
  border-bottom-color: white;
}
.tippy-box[data-theme~='customtheme'][data-placement^='left'] > .tippy-arrow::before {
  border-left-color: white;
}
.tippy-box[data-theme~='customtheme'][data-placement^='right'] > .tippy-arrow::before {
  border-right-color: white;
}
</style>
```
