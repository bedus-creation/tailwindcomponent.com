# Bootstrap Column using Tailwind css

<hr class="border-gray-200">

## Bootstrap Column 
Use flex in the wrapper ```div``` and use tailwind class for width percent to achieve the columns in tailwind css.

<div class="flex">
    <div class="w-1/3 bg-green-200">First Column</div>
    <div class="w-1/3 bg-green-400">First Column</div>
    <div class="w-1/3 bg-green-200">First Column</div>
</div>


```html
<div class="flex">
    <div class="w-1/3 bg-green-200">First Column</div>
    <div class="w-1/3 bg-green-400">First Column</div>
    <div class="w-1/3 bg-green-200">First Column</div>
</div>
```

<div class="mt-10"></div>

## Tailwind Columns with margin separated.
Use negative margin with flex in wrapper ```div``` tag and then apply margin to each components.
<div class="flex -mx-4">
    <div class="mx-4 w-1/3 bg-green-200">First Column</div>
    <div class="mx-4 w-1/3 bg-green-400">First Column</div>
    <div class="mx-4 w-1/3 bg-green-200">First Column</div>
</div>

```html
<div class="flex -mx-4">
    <div class="mx-4 w-1/3 bg-green-200">First Column</div>
    <div class="mx-4 w-1/3 bg-green-400">First Column</div>
    <div class="mx-4 w-1/3 bg-green-200">First Column</div>
</div>
```

<div class="mt-10"></div>

## Responsive Column For Mobile

<div class="md:flex">
    <div class="w-full md:w-1/3 bg-green-200">First Column</div>
    <div class="w-full md:w-1/3 bg-green-400">First Column</div>
    <div class="w-full md:w-1/3 bg-green-200">First Column</div>
</div>

```html
<div class="md:flex">
    <div class="w-full md:w-1/3 bg-green-200">First Column</div>
    <div class="w-full md:w-1/3 bg-green-400">First Column</div>
    <div class="w-full md:w-1/3 bg-green-200">First Column</div>
</div>
```

<div class="mt-10"></div>

## More Columns
Example of twelve columns 
<div class="flex">
    <div class="w-1/12 bg-green-100">First Column</div>
    <div class="w-1/12 bg-green-200">2nd Column</div>
    <div class="w-1/12 bg-green-300">3rd Column</div>
    <div class="w-1/12 bg-green-400">4th Column</div>
    <div class="w-1/12 bg-green-500">5th Column</div>
    <div class="w-1/12 bg-green-600">6th Column</div>
    <div class="w-1/12 bg-green-700">7th Column</div>
    <div class="w-1/12 bg-green-800">8th Column</div>
    <div class="w-1/12 bg-green-900">9th Column</div>
    <div class="w-1/12 bg-green-800">10 Column</div>
    <div class="w-1/12 bg-green-700">11th Column</div>
    <div class="w-1/12 bg-green-600">12th Column</div>
</div>

```html
<div class="flex">
    <div class="w-1/12 bg-green-100">First Column</div>
    <div class="w-1/12 bg-green-200">2nd Column</div>
    <div class="w-1/12 bg-green-300">3rd Column</div>
    <div class="w-1/12 bg-green-400">4th Column</div>
    <div class="w-1/12 bg-green-500">5th Column</div>
    <div class="w-1/12 bg-green-600">6th Column</div>
    <div class="w-1/12 bg-green-700">7th Column</div>
    <div class="w-1/12 bg-green-800">8th Column</div>
    <div class="w-1/12 bg-green-900">9th Column</div>
    <div class="w-1/12 bg-green-800">10 Column</div>
    <div class="w-1/12 bg-green-700">11th Column</div>
    <div class="w-1/12 bg-green-600">12th Column</div>
</div>
```

<div class="mt-10"></div>

## Use Flex wrap
Consider an example below.
<div class="flex">
    <div class="w-1/4 h-20 flex items-center bg-green-100">First Column</div>
    <div class="w-1/4 h-20 flex items-center bg-green-200">2nd Column</div>
    <div class="w-1/4 h-20 flex items-center bg-green-300">3rd Column</div>
    <div class="w-1/4 h-20 flex items-center bg-green-400">4th Column</div>
    <div class="w-1/4 h-20 flex items-center bg-green-100">First Column</div>
    <div class="w-1/4 h-20 flex items-center bg-green-200">2nd Column</div>
    <div class="w-1/4 h-20 flex items-center bg-green-300">3rd Column</div>
    <div class="w-1/4 h-20 flex items-center bg-green-400">4th Column</div>
</div>

```html
<div class="flex">
    <div class="w-1/4 h-20 flex items-center bg-green-100">First Column</div>
    <div class="w-1/4 h-20 flex items-center bg-green-200">2nd Column</div>
    <div class="w-1/4 h-20 flex items-center bg-green-300">3rd Column</div>
    <div class="w-1/4 h-20 flex items-center bg-green-400">4th Column</div>
    <div class="w-1/4 h-20 flex items-center bg-green-100">First Column</div>
    <div class="w-1/4 h-20 flex items-center bg-green-200">2nd Column</div>
    <div class="w-1/4 h-20 flex items-center bg-green-300">3rd Column</div>
    <div class="w-1/4 h-20 flex items-center bg-green-400">4th Column</div>
</div>
```
In the above example we have set width to 25% however it all the columns are set in one row. To go columns in next row use flex wrap. 

<div class="flex flex-wrap">
    <div class="w-1/4 h-20 flex items-center bg-green-100">First Column</div>
    <div class="w-1/4 h-20 flex items-center bg-green-200">2nd Column</div>
    <div class="w-1/4 h-20 flex items-center bg-green-300">3rd Column</div>
    <div class="w-1/4 h-20 flex items-center bg-green-400">4th Column</div>
    <div class="w-1/4 h-20 flex items-center bg-green-400">First Column</div>
    <div class="w-1/4 h-20 flex items-center bg-green-300">2nd Column</div>
    <div class="w-1/4 h-20 flex items-center bg-green-200">3rd Column</div>
    <div class="w-1/4 h-20 flex items-center bg-green-100">4th Column</div>
</div>

```html
<div class="flex flex-wrap">
    <div class="w-1/4 h-20 flex items-center bg-green-100">First Column</div>
    <div class="w-1/4 h-20 flex items-center bg-green-200">2nd Column</div>
    <div class="w-1/4 h-20 flex items-center bg-green-300">3rd Column</div>
    <div class="w-1/4 h-20 flex items-center bg-green-400">4th Column</div>
    <div class="w-1/4 h-20 flex items-center bg-green-400">First Column</div>
    <div class="w-1/4 h-20 flex items-center bg-green-300">2nd Column</div>
    <div class="w-1/4 h-20 flex items-center bg-green-200">3rd Column</div>
    <div class="w-1/4 h-20 flex items-center bg-green-100">4th Column</div>
</div>
```
