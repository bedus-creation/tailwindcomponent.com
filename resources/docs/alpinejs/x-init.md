<h1 class="text-gray-700 font-bold text-2xl md:text-3xl leading-snug">
Directive: X-Init
</h1>

<hr class="border-t-2 border-b-0 border-gray-100 mt-2 mb-8">

x-init is used to run an expression when a component is initialized.

<h2 class="font-bold mb-4 text-gray-700 text-xl mt-16">Use Case:</h3>

Suppose Tabs is being implemented in which we are dynamically activating a tab based on url. 

```html
<div x-data="{ active: 'foo' }" x-init="tab={Parse URL either of home, about or contact}">
    <div x-show="active === 'home'">Home</div>
    <div x-show="active === 'about'">About</div>
    <div x-show="active === 'contact'">Contact</div>
</div>
```
