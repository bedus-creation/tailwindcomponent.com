# Introduction

<hr class="border-gray-200">

Tailwind Css is a css framework where all the css properties are prewritten as classes, later uses that classes to apply css properties. For example: This button
<button type="button" class="bg-blue-600 text-gray-200 rounded px-2 py-1">Primary</Button>
can acheive as the below code using tailwind css.

```html
<button type="button" class="bg-blue-600 text-gray-200 rounded px-2 py-1">Primary</Button>
```
<div class="mt-10"></div>

## Bootstrap vs Tailwind css
Considering the bootstrap framework, which is based on components, above similar button can acheive using minimum css class as:
```html
<button type="button" class="btn btn-primary">Primary</button>
```
It's seems like Bootstrap is clear winner over tailwind css, as you see that bootstrap needs much less code and clear syntax to acheive the similar results.

<div class="mt-10"></div>

## Tailwind is best suited for custom design.
Bootstrap was clear winner in above results. But the tailwind css comes when our application requires custom designs. Bootstrap has set of predefined components, like Buttons, Cards, etc. But when application requires cutom card, custom buttons or custom designs in general, developers writes custom css to acheive the custom desing. So what tailwind offer is that developer doesn't need to write custom css to acheive 95% of the design because all the css properties are well predefined in the form of class class. So Even the bootstrap seems to be the winner in above example, Tailwind css is best to use when application has custom desing to implement.

<div class="mt-10"></div>

## Tailwind Css Installation
The easiest way to include Tailwind css into your project is to use cdn as.

```html
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
```


<div class="mt-10"></div>

## Alpine Js for Tailwind css.
Alpine js minimal framework for composing JavaScript behavior in your markup. As Tailwind css doesn't offer javascript behaviour. So alpine js and tailwind css are best suited together to accomplish reactive components such as dropdown, alert dismiss etc.

<div class="mt-10"></div>

## Alpine Js Installation
The easiest way to use alpine js into an application is to use cdn.

```html
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
```

<div class="mt-10"></div>

## Getting Started for all the codes in this docs.
Just include the tailwind css and alpine js from cdn and you are ready to take a flight.

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
