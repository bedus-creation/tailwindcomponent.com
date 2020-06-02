<h1 class="text-gray-700 font-bold text-2xl md:text-3xl leading-snug">Tailwind Css Collapse and Accordion Example</h1>
<hr class="border-t-2 border-b-0 border-gray-100 mt-2 mb-8">
<h2 class="font-bold mb-4 text-gray-700 text-xl">Tailwind css Collapse Example</h2>
<p class="my-4 leading-relaxed text-gray-700">Tailwind Collapse is a component that toggles the visibility of content across in your websites. Alpine js and Tailwind css will be used to accomplish this tailwind css collapse Example.</p>
<div class="p-6 border rounded-t-lg" style="font-family:Roboto">
    <div x-data={show:false}>
        <p class="flex">
            <a x-on:click.prevent="show=!show" class="bg-blue-600 text-gray-200 rounded hover:bg-blue-500 px-4 py-3 cursor-pointer focus:outline-none mr-2">
            Link with href
            </a>
            <button  @click="show=!show" class="bg-blue-600 text-gray-200 rounded hover:bg-blue-500 px-4 py-3 text-sm focus:outline-none" type="button">
            Button with data-target
            </button>
        </p> 
        <div x-show="show" class="border px-4 py-3 my-2 text-gray-700">
            This is an example of tailwind css collapse with alpine js and tailwindcss. This collapse is toggle by either the above button or a href anochor tags.
        </div>
    </div>
</div>

```html
<div x-data={show:false}>
    <p class="flex">
        <a x-on:click.prevent="show=!show" class="bg-blue-600 text-gray-200 rounded hover:bg-blue-500 px-4 py-3 cursor-pointer focus:outline-none mr-2">
        Link with href
        </a>
        <button  @click="show=!show" class="bg-blue-600 text-gray-200 rounded hover:bg-blue-500 px-4 py-3 text-sm focus:outline-none" type="button">
        Button with data-target
        </button>
    </p> 
    <div x-show="show" class="border px-4 py-3 my-2 text-gray-700">
        This is an example of tailwind css collapse with alpine js and tailwindcss. This collapse is toggle by either the above button or a href anochor tags.
    </div>
</div>
```

<div class="p-6 border rounded-t-lg text-center mt-16" style="font-family:Roboto">
    <a href="/editors/tailwind-css-collapse-da60944e2352" class="leading-tight bg-blue-600 hover:text-gray-100 text-gray-200 rounded px-6 py-3 text-sm">Try Online</a>
</div>


<h2 class="font-bold mb-4 text-gray-700 text-xl">Tailwind css Accordion Example</h2>
<p class="my-4 leading-relaxed text-gray-700">Tailwind Css Accordion is a list of collapse items that toggles the visibility of each content across where relative button is clicked. Alpine js and Tailwind css will be used to accomplish this tailwind css Accordion Example.</p>
<div class="p-6 border rounded-t-lg" style="font-family:Roboto">
    <div class="w-full my-4">
        <div x-data={show:false} class="rounded-sm">
            <div class="border border-b-0 bg-gray-100 px-10 py-6" id="headingOne">
                <button @click="show=!show" class="underline text-blue-500 hover:text-blue-700 focus:outline-none" type="button">
                Collapsible Group Item #1
                </button>
            </div>
            <div x-show="show" class="border border-b-0 px-10 py-6">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
        </div>
        <div x-data={show:false} class="rounded-sm">
            <div class="border border-b-0 bg-gray-100 px-10 py-6" id="headingOne">
                <button @click="show=!show" class="underline text-blue-500 hover:text-blue-700 focus:outline-none" type="button">
                Collapsible Group Item #2
                </button>
            </div>
            <div x-show="show" class="px-10 py-6">     
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
        </div>
        <div x-data={show:false} class="rounded-sm">
            <div class="border bg-gray-100 px-10 py-6" id="headingOne">
                <button @click="show=!show" class="underline text-blue-500 hover:text-blue-700 focus:outline-none" type="button">
                Collapsible Group Item #3
                </button>
            </div>
            <div x-show="show" class="border px-10 py-6">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
        </div>
    </div>
</div>

```html
<div class="w-full my-4">
    <div x-data={show:false} class="rounded-sm">
        <div class="border border-b-0 bg-gray-100 px-10 py-6" id="headingOne">
            <button @click="show=!show" class="underline text-blue-500 hover:text-blue-700 focus:outline-none" type="button">
            Collapsible Group Item #1
            </button>
        </div>
        <div x-show="show" class="border border-b-0 px-10 py-6">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
        </div>
    </div>
    <div x-data={show:false} class="rounded-sm">
        <div class="border border-b-0 bg-gray-100 px-10 py-6" id="headingOne">
            <button @click="show=!show" class="underline text-blue-500 hover:text-blue-700 focus:outline-none" type="button">
            Collapsible Group Item #2
            </button>
        </div>
        <div x-show="show" class="px-10 py-6">     
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
        </div>
    </div>
    <div x-data={show:false} class="rounded-sm">
        <div class="border bg-gray-100 px-10 py-6" id="headingOne">
            <button @click="show=!show" class="underline text-blue-500 hover:text-blue-700 focus:outline-none" type="button">
            Collapsible Group Item #3
            </button>
        </div>
        <div x-show="show" class="border px-10 py-6">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
        </div>
    </div>
</div>
```

<div class="p-6 border rounded-t-lg text-center mt-16" style="font-family:Roboto">
    <a href="/editors/tailwind-accordion-38c4766d4199" class="leading-tight bg-blue-600 hover:text-gray-100 text-gray-200 rounded px-6 py-3 text-sm">Try Online</a>
</div>
