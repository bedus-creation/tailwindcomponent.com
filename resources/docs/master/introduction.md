<h1 class="text-gray-700 font-bold text-2xl md:text-3xl leading-snug">Tailwind Css Introduction - Bootstrap vs Tailwind </h1>

<hr class="border-t-2 border-b-0 border-gray-100 mt-2 mb-8">

<p class="my-4 leading-relaxed text-gray-700">Tailwind Css is a css framework where all the css properties are prewritten as classes, later uses that classes to apply css properties. For example: This button
<button type="button" class="bg-blue-600 text-gray-200 rounded px-2 py-1">Primary</Button>
can acheive as the below code using tailwind css.</p>

```html
<button type="button" class="bg-blue-600 text-gray-200 rounded px-2 py-1">Primary</Button>
```


<h2 class="font-bold mb-4 text-gray-700 text-xl mt-16"> Bootstrap vs Tailwind css</h3>
<p class="my-4 leading-relaxed text-gray-700">
Considering the bootstrap framework, which is based on components, above similar button can acheive using minimum css class as:
</p>

```html
<button type="button" class="btn btn-primary">Primary</button>
```

<p class="my-4 leading-relaxed text-gray-700">
It's seems like Bootstrap is clear winner over tailwind css, as you see that bootstrap needs much less code and clear syntax to acheive the similar results.
</p>


<h2 class="font-bold mb-4 text-gray-700 text-xl mt-16">Tailwind is best suited for custom design.</h3>
<p class="my-4 leading-relaxed text-gray-700">
Bootstrap was clear winner in above results. But the tailwind css comes when our application requires custom designs. Bootstrap has set of predefined components, like Buttons, Cards, etc. But when application requires cutom card, custom buttons or custom designs in general, developers writes custom css to acheive the custom desing. So what tailwind offer is that developer doesn't need to write custom css to acheive 95% of the design because all the css properties are well predefined in the form of class class. So Even the bootstrap seems to be the winner in above example, Tailwind css is best to use when application has custom desing to implement.
</p>

<h2 class="font-bold mb-4 text-gray-700 text-xl mt-16">What do you mean by custom components ?</h3>
<p class="my-4 leading-relaxed text-gray-700">
Consider a custom alert component for example. As we know that bootstrap offer a alert component, But we want more beautiful and appealing alert component similar in the below section. How easy is to get those components in css using bootstrap ? In bootstrap there is no way that you can achieve this components without writing extra css. I wouldn't say that's bad way, but I would say that taiwiind offer that this component can achieve  with out writing extra css.
</p>

<div class="p-4 border rounded-t-lg bg-gray-300 flex justify-center">
    <div x-data="{ show: true }" x-show="show" class="w-11/12 md:w-3/5 bg-white my-2 rounded-r-md px-6 border-l-4 -ml-4 border-gray-100 bg-green-500">
        <div class="flex items-center py-4">
            <svg class="svg-inline--fa fa-check fa-w-16 border-2 border-gray-200 px-2 rounded-full fill-current text-4xl font-light text-gray-200" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"></path></svg><!-- <i class="fas fa-check border-2 border-gray-200 px-2 rounded-full fill-current text-4xl font-light text-gray-200"></i> -->
            <div class="ml-5">
                <h1 class="text-lg font-bold text-gray-200 mb-2">Well done!</h1>
                <p class="text-gray-300 leading-tight my-0">You successfully read this important alert message.</p>
            </div>
            <div>
                <button type="button" @click="show = false" class=" text-yellow-100">
                    <span class="text-2xl">×</span>
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

<h2 class="font-bold mb-4 text-gray-700 text-xl mt-16">Conclusion</h3>
<p class="my-4 leading-relaxed text-gray-700">
For me, I am really impressed by the way that tailwind offers you to write css in your html. In 90% of the design we don't have to write extra css for any custom design, which is almost impossible in bootstrap. On the otherhands bootstrap offers all the basic components that are useful in design. So, In my thoughts, bootstrap is well fit where you need general simple websites, which don't need more extra custom components. In other hands tailwind css is best fit while you are designing completely unique looks website that doesn't exists in the world before. But in my case I am completely moving towards tailwnd css. I will use tailwind css for all of my client projects onwards.
</p>

<h2 class="font-bold mb-4 text-gray-700 text-xl mt-16">Tailwind Css Installation</h3>
<p class="my-4 leading-relaxed text-gray-700">
The easiest way to include Tailwind css into your project is to use cdn as.
</p>


```html
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
```

<h2 class="font-bold mb-4 text-gray-700 text-xl mt-16"> Alpine Js for Tailwind css.</h2>
<p class="my-4 leading-relaxed text-gray-700">
Alpine js minimal framework for composing JavaScript behavior in your markup. As Tailwind css doesn't offer javascript behaviour. So alpine js and tailwind css are best suited together to accomplish reactive components such as dropdown, alert dismiss etc.
</p>


<h2 class="font-bold mb-4 text-gray-700 text-xl mt-16"> Alpine Js Installation</h2>
<p class="my-4 leading-relaxed text-gray-700">The easiest way to use alpine js into an application is to use cdn.</p>

```html
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
```


<h2 class="font-bold mb-4 text-gray-700 text-xl mt-16">Getting Started for all the codes in this docs.</h2>
<p class="my-4 leading-relaxed text-gray-700">
Just include the tailwind css and alpine js from cdn and you are ready to take a flight.
</p>

```html
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>
<body>
   // Your content 
</body>

</html>
```

<div class="p-6 border rounded-t-lg text-center mt-16" style="font-family:Roboto">
    <a href="/tailwind/try" class="leading-tight bg-blue-600 hover:text-gray-100 text-gray-200 rounded px-6 py-3 text-sm">Try Online</a>
 </div>
