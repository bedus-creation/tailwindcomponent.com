# Bootstrap badge using Tailwind css

## Example of badge with button 
<button class="bg-blue-600 text-gray-100 px-3 py-2 rounded mb-2">
Notifications <span class="bg-gray-200 text-gray-800 px-1 rounded">4</span>
</button>

```html
<button class="bg-blue-600 text-gray-100 px-3 py-2 rounded">
Notifications <span class="bg-gray-200 text-gray-800 px-1 rounded">4</span>
</button>
```

## Contextual variations of badges
<div class="mb-4">
<span class="bg-blue-600 text-gray-200 text-xs px-2 py-1 rounded">Primary</span>
<span class="bg-gray-600 text-gray-100 text-xs px-2 py-1 rounded">Secondary</span>
<span class="bg-green-400 text-gray-100 text-xs px-2 py-1 rounded">Success</span>
<span class="bg-red-500 text-gray-200 text-xs px-2 py-1 rounded">Danger</span>
<span class="bg-yellow-400 text-gray-800 text-xs px-2 py-1 rounded">Warning</span>
<span class="bg-teal-400 text-gray-100 text-xs px-2 py-1 rounded">Info</span>
<span class="bg-gray-100 text-gray-900 text-xs px-2 py-1 rounded">Light</span>
<span class="bg-gray-900 text-gray-100 text-xs px-2 py-1 rounded">Dark</span>
</div>

```html
<span class="bg-blue-600 text-gray-200 text-xs px-2 py-1 rounded">Primary</span>
<span class="bg-gray-600 text-gray-100 text-xs px-2 py-1 rounded">Secondary</span>
<span class="bg-green-400 text-gray-100 text-xs px-2 py-1 rounded">Success</span>
<span class="bg-red-500 text-gray-200 text-xs px-2 py-1 rounded">Danger</span>
<span class="bg-yellow-400 text-gray-800 text-xs px-2 py-1 rounded">Warning</span>
<span class="bg-teal-400 text-gray-100 text-xs px-2 py-1 rounded">Info</span>
<span class="bg-gray-100 text-gray-900 text-xs px-2 py-1 rounded">Light</span>
<span class="bg-gray-900 text-gray-100 text-xs px-2 py-1 rounded">Dark</span>
```

## Pill Badges
Add ```rounded-full``` class instead of ```rounded``` class in above example.
<div class="my-2">
    <span class="bg-blue-600 text-gray-200 text-xs px-2 py-1 rounded-full">Primary</span>
    <span class="bg-gray-600 text-gray-100 text-xs px-2 py-1 rounded-full">Secondary</span>
    <span class="bg-green-400 text-gray-100 text-xs px-2 py-1 rounded-full">Success</span>
    <span class="bg-red-500 text-gray-200 text-xs px-2 py-1 rounded-full">Danger</span>
    <span class="bg-yellow-400 text-gray-800 text-xs px-2 py-1 rounded-full">Warning</span>
    <span class="bg-teal-400 text-gray-100 text-xs px-2 py-1 rounded-full">Info</span>
    <span class="bg-gray-100 text-gray-900 text-xs px-2 py-1 rounded-full">Light</span>
    <span class="bg-gray-900 text-gray-100 text-xs px-2 py-1 rounded-full">Dark</span>
</div>

```html
<span class="bg-blue-600 text-gray-200 text-xs px-2 py-1 rounded-full">Primary</span>
<span class="bg-gray-600 text-gray-100 text-xs px-2 py-1 rounded-full">Secondary</span>
<span class="bg-green-400 text-gray-100 text-xs px-2 py-1 rounded-full">Success</span>
<span class="bg-red-500 text-gray-200 text-xs px-2 py-1 rounded-full">Danger</span>
<span class="bg-yellow-400 text-gray-800 text-xs px-2 py-1 rounded-full">Warning</span>
<span class="bg-teal-400 text-gray-100 text-xs px-2 py-1 rounded-full">Info</span>
<span class="bg-gray-100 text-gray-900 text-xs px-2 py-1 rounded-full">Light</span>
<span class="bg-gray-900 text-gray-100 text-xs px-2 py-1 rounded-full">Dark</span>
```

### Example with Links
<div class="my-2">
    <a href="#"><span class="bg-blue-600 text-gray-200 text-xs px-2 py-1 rounded-full">Primary</span></a>
    <a href="#"><span class="bg-gray-600 text-gray-100 text-xs px-2 py-1 rounded-full">Secondary</span></a>
    <a href="#"><span class="bg-green-400 text-gray-100 text-xs px-2 py-1 rounded-full">Success</span></a>
    <a href="#"><span class="bg-red-500 text-gray-200 text-xs px-2 py-1 rounded-full">Danger</span></a>
    <a href="#"><span class="bg-yellow-400 text-gray-800 text-xs px-2 py-1 rounded-full">Warning</span></a>
    <a href="#"><span class="bg-teal-400 text-gray-100 text-xs px-2 py-1 rounded-full">Info</span></a>
    <a href="#"><span class="bg-gray-100 text-gray-900 text-xs px-2 py-1 rounded-full">Light</span></a>
    <a href="#"><span class="bg-gray-900 text-gray-100 text-xs px-2 py-1 rounded-full">Dark</span></a>
</div>


```html
<a href="#"><span class="bg-blue-600 text-gray-200 text-xs px-2 py-1 rounded-full">Primary</span></a>
<a href="#"><span class="bg-gray-600 text-gray-100 text-xs px-2 py-1 rounded-full">Secondary</span></a>
<a href="#"><span class="bg-green-400 text-gray-100 text-xs px-2 py-1 rounded-full">Success</span></a>
<a href="#"><span class="bg-red-500 text-gray-200 text-xs px-2 py-1 rounded-full">Danger</span></a>
<a href="#"><span class="bg-yellow-400 text-gray-800 text-xs px-2 py-1 rounded-full">Warning</span></a>
<a href="#"><span class="bg-teal-400 text-gray-100 text-xs px-2 py-1 rounded-full">Info</span></a>
<a href="#"><span class="bg-gray-100 text-gray-900 text-xs px-2 py-1 rounded-full">Light</span></a>
<a href="#"><span class="bg-gray-900 text-gray-100 text-xs px-2 py-1 rounded-full">Dark</span></a>
```
