# List group
Example of Bootstrap list group using tailwind css.
<ul class="px-0">
  <li class="border rounded-sm px-3 py-3" style='border-bottom-width:0'>List Item 1</li>
  <li class="border rounded-sm px-3 py-3" style='border-bottom-width:0'>List Item 2</li>
  <li class="border rounded-sm px-3 py-3" style='border-bottom-width:0'>List item 3</li>
  <li class="border rounded-sm px-3 py-3" style='border-bottom-width:0'>List Item 4</li>
  <li class="border rounded-sm px-3 py-3" >List Item 5</li>
</ul>

```html
<ul class="px-0">
  <li class="border rounded-sm px-3 py-3" style='border-bottom-width:0'>List Item 1</li>
  <li class="border rounded-sm px-3 py-3" style='border-bottom-width:0'>List Item 2</li>
  <li class="border rounded-sm px-3 py-3" style='border-bottom-width:0'>List item 3</li>
  <li class="border rounded-sm px-3 py-3" style='border-bottom-width:0'>List Item 4</li>
  <li class="border rounded-sm px-3 py-3" >List Item 5</li>
</ul>
```

## Active Items javascript behaviours

Use alpine js to acheive active items javascript behavious
<ul x-data="{ item: '1st' }" class="px-0">
  <li class="border rounded-sm px-3 py-3" :class="{ 'bg-blue-600 text-gray-200': item === '1st' }" @click="item = '1st'" style='border-bottom-width:0'>List Item 1</li>
  <li class="border rounded-sm px-3 py-3"  :class="{ 'bg-blue-600 text-gray-200': item === '2nd' }" @click="item = '2nd'" style='border-bottom-width:0'>List Item 2</li>
  <li class="border rounded-sm px-3 py-3"  :class="{ 'bg-blue-600 text-gray-200': item === '3rd' }" @click="item = '3rd'" style='border-bottom-width:0'>List item 3</li>
  <li class="border rounded-sm px-3 py-3"  :class="{ 'bg-blue-600 text-gray-200': item === '4th' }" @click="item = '4th'" style='border-bottom-width:0'>List Item 4</li>
  <li class="border rounded-sm px-3 py-3"  :class="{ 'bg-blue-600 text-gray-200': item === '5th' }" @click="item = '5th'">List Item 5</li>
</ul>

```html
<ul x-data="{ item: '1st' }" class="px-0">
  <li class="border rounded-sm px-3 py-3" :class="{ 'bg-blue-600 text-gray-200': item === '1st' }" @click="item = '1st'" style='border-bottom-width:0'>List Item 1</li>
  <li class="border rounded-sm px-3 py-3"  :class="{ 'bg-blue-600 text-gray-200': item === '2nd' }" @click="item = '2nd'" style='border-bottom-width:0'>List Item 2</li>
  <li class="border rounded-sm px-3 py-3"  :class="{ 'bg-blue-600 text-gray-200': item === '3rd' }" @click="item = '3rd'" style='border-bottom-width:0'>List item 3</li>
  <li class="border rounded-sm px-3 py-3"  :class="{ 'bg-blue-600 text-gray-200': item === '4th' }" @click="item = '4th'" style='border-bottom-width:0'>List Item 4</li>
  <li class="border rounded-sm px-3 py-3"  :class="{ 'bg-blue-600 text-gray-200': item === '5th' }" @click="item = '5th'">List Item 5</li>
</ul>
```

## Use with links
Here is example about how to use with links.
<ul class="px-0">
  <a href="#"><li class="border rounded-sm px-3 py-3" style='border-bottom-width:0'>List Item 1</li></a>
  <a href="#"><li class="border rounded-sm px-3 py-3" style='border-bottom-width:0'>List Item 2</li></a>
  <a href="#"><li class="border rounded-sm px-3 py-3" style='border-bottom-width:0'>List item 3</li></a>
  <a href="#"><li class="border rounded-sm px-3 py-3" style='border-bottom-width:0'>List Item 4</li></a>
  <a href="#"><li class="border rounded-sm px-3 py-3" >List Item 5</li></a>
</ul>

```html
<ul class="px-0">
  <a href="#"><li class="border rounded-sm px-3 py-3" style='border-bottom-width:0'>List Item 1</li></a>
  <a href="#"><li class="border rounded-sm px-3 py-3" style='border-bottom-width:0'>List Item 2</li></a>
  <a href="#"><li class="border rounded-sm px-3 py-3" style='border-bottom-width:0'>List item 3</li></a>
  <a href="#"><li class="border rounded-sm px-3 py-3" style='border-bottom-width:0'>List Item 4</li></a>
  <a href="#"><li class="border rounded-sm px-3 py-3" >List Item 5</li></a>
</ul>
```
