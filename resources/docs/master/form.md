# Bootstrap style form using tailwind css

<hr class="border-gray-200" style="border-bottom-width:0">
Form is an important part of web application. Here are some examples of forms using tailwind css. 

## Input Select and Textarea 
Example of form input select and textarea using tailwind css.
<div class="flex -mx-4 mb-2">
    <div class="w-1/2 mx-4">
        <label class="font-light">First Name</label>
        <input type='text' class="w-full border rounded px-3 py-1 text-gray-700" />
    </div>
    <div class="w-1/2 mx-4">
        <label class="font-light">Last Name</label>
        <input type='text' class="w-full border rounded px-3 py-1 text-gray-700" />
    </div>
</div>
<div class="mb-2">
    <label class="font-light">Select some action</label> 
    <select class="w-full border bg-white rounded py-2">
        <option>Option 1</option>
        <option>Option 2</option>
        <option>Option 3</option>
    </select>
</div>
<div class="w-full">
    <label class="font-light">Tell us about you</label> 
    <textarea class="w-full border rounded" rows="4"></textarea>
</div>
<div class="w-full mb-2">
    <button type="button" class="text-sm bg-blue-600 text-gray-200 rounded px-2 py-1 float-right">Save Form</button>
</div>

<div class="mt-10"></div>

```html
<div class="flex -mx-4 mb-2">
    <div class="w-1/2 mx-4">
        <label class="font-light">First Name</label>
        <input type='text' class="w-full border rounded px-3 py-1 text-gray-700" />
    </div>
    <div class="w-1/2 mx-4">
        <label class="font-light">Last Name</label>
        <input type='text' class="w-full border rounded px-3 py-1 text-gray-700" />
    </div>
</div>
<label class="font-light">Tell us about you</label> 
<textarea class="w-full border rounded" rows="4"></textarea>

<button type="button" class="bg-blue-600 text-gray-200 rounded px-2 py-1 float-right">Save Form</button>
```
