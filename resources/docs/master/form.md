<h1 class="text-gray-700 font-bold text-2xl md:text-3xl leading-snug">Tailwind Form Example</h1>

<hr class="border-t-2 border-b-0 border-gray-100 mt-2 mb-8">

<h2 class="font-bold mb-4 text-gray-700 text-xl">Simple Inputs with label</h2>
<div class="p-6 border rounded-t-lg" style="font-family:Roboto">
    <label class="text-gray-600 font-light">Default size Input with focus primary outline</label>
    <input type='text' placeholder="Enter your input here" class="w-full mt-2 mb-6 px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-green-500" />
</div>


```html
<label class="text-gray-600 font-light">Default size Input with focus primary outline</label>
<input type='text' placeholder="Enter your input here" class="w-full mt-2 mb-6 px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-green-500" />
```

<h2 class="font-bold mb-4 text-gray-700 text-xl mt-16">Big size Input</h2>
<div class="p-6 border rounded-t-lg" style="font-family:Roboto">
    <label class="text-gray-600 font-light">Big Size Input</label>
    <input type='text' placeholder="Enter your input here" class="w-full mt-2 mb-6 px-6 py-3 border rounded-lg text-lg text-gray-700 focus:outline-none" />
</div>

```html
<label class="text-gray-600 font-light">Big Size Input</label>
<input type='text' placeholder="Enter your input here" class="w-full mt-2 mb-6 px-6 py-3 border rounded-lg text-lg text-gray-700 focus:outline-none" />
```

<h2 class="font-bold mb-4 text-gray-700 text-xl mt-16">Small size Input</h2>
<div class="p-6 border rounded-t-lg" style="font-family:Roboto">
    <label class="text-gray-600 font-light">Small Size Input</label>
    <input type='text' placeholder="Enter your input here" class="w-full my-2 px-3 py-1 border rounded-lg text-xs text-gray-700 focus:outline-none" />
</div>

```html
<label class="text-gray-600 font-light">Small Size Input</label>
<input type='text' placeholder="Enter your input here" class="w-full my-2 px-3 py-1 border rounded-lg text-xs text-gray-700 focus:outline-none" />
```


<h2 class="font-bold mb-4 text-gray-700 text-xl mt-16">Input with Icons on Left</h2>
<div class="p-6 border rounded-t-lg" style="font-family:Roboto">
    <label class="text-gray-600 font-light">Input with Icons</label>
    <div class="flex items-center mt-2 mb-6">
        <svg class="w-4 h-4 fill-current text-gray-500 ml-4 z-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/></svg>
        <input type='text' placeholder="Enter your input here" class="w-full -ml-8 pl-10 px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-green-500"/>
    </div>
</div>

```html
<label class="text-gray-600 font-light">Input with Icons</label>
<div class="flex items-center mt-2 mb-6">
    <svg class="w-4 h-4 fill-current text-gray-500 ml-4 z-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/></svg>
    <input type='text' placeholder="Enter your input here" class="w-full -ml-8 pl-10 px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-green-500"/>
</div>
```


<h2 class="font-bold mb-4 text-gray-700 text-xl mt-16">Input with Icons on Right</h2>
<div class="p-6 border rounded-t-lg" style="font-family:Roboto">
    <label class="text-gray-600 font-light">Input with Icons</label>
    <div class="flex items-center mt-2 mb-6">
        <input type='text' placeholder="Enter your input here" class="w-full pr-10 pl-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-green-500"/>
        <svg class="w-4 h-4 fill-current text-gray-500 -ml-8 z-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/></svg>
    </div>
</div>

```html
<label class="text-gray-600 font-light">Input with Icons</label>
<div class="flex items-center mt-2 mb-6">
    <input type='text' placeholder="Enter your input here" class="w-full pr-10 pl-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-green-500"/>
    <svg class="w-4 h-4 fill-current text-gray-500 -ml-8 z-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/></svg>
</div>
```



<h2 class="font-bold mb-4 text-gray-700 text-xl mt-16">Tailwind Select</h2>
<div class="p-6 border rounded-t-lg" style="font-family:Roboto">
    <select class="w-full border bg-white rounded px-3 py-2 outline-none">
        <option class="py-1">Option 1</option>
        <option class="py-1">Option 2</option>
        <option class="py-1">Option 3</option>
    </select>
</div>

```html
 <select class="w-full border bg-white rounded px-3 py-2 outline-none">
    <option class="py-1">Option 1</option>
    <option class="py-1">Option 2</option>
    <option class="py-1">Option 3</option>
</select>
```

<h2 class="font-bold mb-4 text-gray-700 text-xl mt-16">Tailwind Multiple Select</h2>
<div class="p-6 border rounded-t-lg" style="font-family:Roboto">
    <select class="w-full border bg-white rounded px-3 py-2 outline-none text-gray-700" multiple>
        <option class="py-1">Option 1</option>
        <option class="py-1">Option 2</option>
        <option class="py-1">Option 3</option>
        <option class="py-1">Option 4</option>
        <option class="py-1">Option 5</option>
        <option class="py-1">Option 6</option>
    </select>
</div>

```html
<select class="w-full border bg-white rounded px-3 py-2 outline-none text-gray-700" multiple>
    <option class="py-1">Option 1</option>
    <option class="py-1">Option 2</option>
    <option class="py-1">Option 3</option>
    <option class="py-1">Option 4</option>
    <option class="py-1">Option 5</option>
    <option class="py-1">Option 6</option>
</select>
```

<h2 class="font-bold mb-4 text-gray-700 text-xl mt-16">Tailwind Textarea Example</h2>
<div class="p-6 border rounded-t-lg" style="font-family:Roboto">
    <textarea class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none" rows="4"></textarea>
</div>


```html
<textarea class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none" rows="4"></textarea>
```

<h2 class="font-bold mb-4 text-gray-700 text-xl mt-16">Tailwind File Browser Example</h2>
<div class="p-6 border rounded-t-lg" style="font-family:Roboto">
    <input type="file" class="w-full text-gray-700 px-3 py-2 border rounded">
</div>

```html
 <input type="file" class="w-full text-gray-700 px-3 py-2 border rounded">
```

<h2 class="font-bold mb-4 text-gray-700 text-xl mt-16">Custom Checkbox</h2>
<div class="p-6 border rounded-t-lg" style="font-family:Roboto">
    <div class="flex items-center">
        <input type="checkbox" id="checkbox-example" class="h-4 w-4 text-gray-700 border rounded mr-2">
        <label for="checkbox-example">Check this custom checkbox</label>
    </div>
</div>

```html
<div class="flex items-center">
    <input type="checkbox" id="checkbox-example" class="h-4 w-4 text-gray-700 border rounded mr-2">
    <label for="checkbox-example">Check this custom checkbox</label>
</div>
```

<h2 class="font-bold mb-4 text-gray-700 text-xl mt-16">Custom Large Checkbox</h2>
<div class="p-6 border rounded-t-lg" style="font-family:Roboto">
    <div class="flex items-center">
        <input type="checkbox" id="checkbox-large-example" class="h-6 w-6 text-gray-700 border rounded mr-2">
        <label for="checkbox-large-example">Check this custom Large checkbox</label>
    </div>
</div>

```html
<div class="flex items-center">
    <input type="checkbox" id="checkbox-large-example" class="h-6 w-6 text-gray-700 border rounded mr-2">
    <label for="checkbox-large-example">Check this custom Large checkbox</label>
</div>
```

<h2 class="font-bold mb-4 text-gray-700 text-xl mt-16">Custom Radio</h2>
<div class="p-6 border rounded-t-lg" style="font-family:Roboto">
    <label class="block text-gray-600 font-light mb-2">Select Gender Inline</label>
    <div class="flex">
        <div class="flex items-center mb-2 mr-4">
            <input type="radio" id="radio-example-1" name="radio" class="h-4 w-4 text-gray-700 px-3 py-3 border rounded mr-2">
            <label for="radio-example-1" class="text-gray-600">Male</label>
        </div>
        <div class="flex items-center mb-2">
            <input type="radio" id="radio-example-2" name="radio" class="h-4 w-4 text-gray-700 px-3 py-3 border rounded mr-2">
            <label for="radio-example-2" class="text-gray-600">Female</label>
        </div>
    </div>
</div>


```html
<label class="block text-gray-600 font-light mb-2">Select Gender Inline</label>
<div class="flex">
    <div class="flex items-center mb-2 mr-4">
        <input type="radio" id="radio-example-1" name="radio" class="h-4 w-4 text-gray-700 px-3 py-3 border rounded mr-2">
        <label for="radio-example-1" class="text-gray-600">Male</label>
    </div>
    <div class="flex items-center mb-2">
        <input type="radio" id="radio-example-2" name="radio" class="h-4 w-4 text-gray-700 px-3 py-3 border rounded mr-2">
        <label for="radio-example-2" class="text-gray-600">Female</label>
    </div>
</div>
```


<h2 class="font-bold mb-4 text-gray-700 text-xl mt-16">Custom Toggle Input</h2>
<div class="p-6 border rounded-t-lg flex justify-center">
    <img class="" src="/assets/docs/master/image-05.gif">
</div>

<div class="p-6 border rounded-t-lg text-center mt-16" style="font-family:Roboto">
    <a href="/editors/tailwind-slider-example-174e54f77257" class="leading-tight bg-blue-600 hover:text-gray-100 text-gray-200 rounded px-6 py-3 text-sm">Try Online</a>
 </div>
