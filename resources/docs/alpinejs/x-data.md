<h1 class="text-gray-700 font-bold text-2xl md:text-3xl leading-snug">
Directive: X-Data
</h1>

<hr class="border-t-2 border-b-0 border-gray-100 mt-2 mb-8">

x-data directive is used to define initial data for a section of html elements,Let's named as component. The defined data is unavailable to outside component.

<h2 class="font-bold mb-4 text-gray-700 text-xl mt-16">Dropdown Example: Alpine js </h3>

```html
<div x-data="{ open: false }">
    <button @click="open = true">Open Dropdown</button>
    <ul
        x-show="open"
        @click.away="open = false"
    >
        Dropdown Body
    </ul>
</div>
```

<h2 class="font-bold mb-4 text-gray-700 text-xl mt-16">Tabs Example: Alpine js </h3>

```html
<div x-data="{ tab: 'foo' }">
    <button :class="{ 'active': tab === 'foo' }" @click="tab = 'foo'">Foo</button>
    <button :class="{ 'active': tab === 'bar' }" @click="tab = 'bar'">Bar</button>

    <div x-show="tab === 'foo'">Tab Foo</div>
    <div x-show="tab === 'bar'">Tab Bar</div>
</div>
```
