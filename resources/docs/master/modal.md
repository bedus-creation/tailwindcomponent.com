<h1 class="text-gray-700 font-bold text-2xl md:text-3xl leading-snug"> Bootstrap like modal using Tailwind CSS </h1>

<hr class="border-t-2 border-b-0 border-gray-100 mt-2 mb-8">

<h2 class="font-bold mb-4 text-gray-700 text-xl">Basic Modal Demo</h2>
<p class="my-4 leading-relaxed text-gray-700">Here is a basic bootrstap style model using Tailwindcss and alpine js.</p>

<div x-data="{ show: false }" class="p-4 border rounded-t-lg" style="font-family:Roboto">
    <div class="flex justify-center">
        <button @click={show=true} type="button" class="leading-tight bg-blue-600 text-gray-200 rounded px-6 py-3 text-sm">Show Modal</Button>
    </div>
    <div x-show="show" tabindex="0" class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed">
        <div  @click.away="show = false" class="z-50 relative p-3 mx-auto my-0 max-w-full" style="width: 600px;">
            <div class="bg-white rounded shadow-lg border flex flex-col overflow-hidden">
                <button @click={show=false} class="fill-current h-6 w-6 absolute right-0 top-0 m-6 font-3xl font-bold">&times;</button>
                <div class="px-6 py-3 text-xl border-b font-bold">Title of the modal</div>
                <div class="p-6 flex-grow">
                    <p>You are watching this text in tailwind css model with alpine JS.</p>
                </div>
                <div class="px-6 py-3 border-t">
                    <div class="flex justify-end">
                        <button @click={show=false} type="button" class="bg-gray-700 text-gray-100 rounded px-4 py-2 mr-1">Close</Button>
                        <button type="button" class="bg-blue-600 text-gray-200 rounded px-4 py-2">Saves Changes</Button>
                    </div>
                </div>
            </div>
        </div>
        <div class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed bg-black opacity-50"></div>
    </div>
</div>

```html
<div x-data="{ show: false }">
    <div class="flex justify-center">
        <button @click={show=true} type="button" class="leading-tight bg-blue-600 text-gray-200 rounded px-6 py-3 text-sm">Show Modal</Button>
    </div>
    <div x-show="show" tabindex="0" class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed">
        <div  @click.away="show = false" class="z-50 relative p-3 mx-auto my-0 max-w-full" style="width: 600px;">
            <div class="bg-white rounded shadow-lg border flex flex-col overflow-hidden">
                <button @click={show=false} class="fill-current h-6 w-6 absolute right-0 top-0 m-6 font-3xl font-bold">&times;</button>
                <div class="px-6 py-3 text-xl border-b font-bold">Title of the modal</div>
                <div class="p-6 flex-grow">
                    <p>You are watching this text in tailwind css model with alpine JS.</p>
                </div>
                <div class="px-6 py-3 border-t">
                    <div class="flex justify-end">
                        <button @click={show=false} type="button" class="bg-gray-700 text-gray-100 rounded px-4 py-2 mr-1">Close</Button>
                        <button type="button" class="bg-blue-600 text-gray-200 rounded px-4 py-2">Saves Changes</Button>
                    </div>
                </div>
            </div>
        </div>
        <div class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed bg-black opacity-50"></div>
    </div>
</div>
```

<h2 class="font-bold mb-4 text-gray-700 text-xl  mt-16">Scrolling long content</h2>
<p class="my-4 leading-relaxed text-gray-700">Here is a basic bootrstap style model using Tailwindcss and alpine js.</p>

<div x-data="{ show: false }" class="p-4 border rounded-t-lg" style="font-family:Roboto">
    <div class="flex justify-center">
        <button @click={show=true} type="button" class="leading-tight bg-blue-600 text-gray-200 rounded px-6 py-3 text-sm">Show Modal</Button>
    </div>
    <div x-show="show" tabindex="0" class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed">
        <div  @click.away="show = false" class="z-50 relative p-3 mx-auto my-0 max-w-full" style="width: 600px;">
            <div class="bg-white rounded shadow-lg border flex flex-col overflow-hidden">
                <button @click={show=false} class="fill-current h-6 w-6 absolute right-0 top-0 m-6 font-3xl font-bold">&times;</button>
                <div class="px-6 py-3 text-xl border-b font-bold">Title of the modal</div>
                <div class="p-6 flex-grow">
                    <p>
                    Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.  
                    Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.
                    Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.
                    Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                    Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.
                    Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.
                    Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                    Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.
                    Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.
                    Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                    Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.
                    Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.
                    Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                    Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.
                    Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.
                    Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                    Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.
                    Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.
                    </p>
                </div>
                <div class="px-6 py-3 border-t">
                    <div class="flex justify-end">
                        <button @click={show=false} type="button" class="bg-gray-700 text-gray-100 rounded px-4 py-2 mr-1">Close</Button>
                        <button type="button" class="bg-blue-600 text-gray-200 rounded px-4 py-2">Saves Changes</Button>
                    </div>
                </div>
            </div>
        </div>
        <div class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed bg-black opacity-50"></div>
    </div>
</div>


<h2 class="font-bold mb-4 text-gray-700 text-xl  mt-16">Lock Background Scrolling</h2>
<p class="my-4 leading-relaxed text-gray-700">In above example background is being scrolled even when modal is open. Background can set to fixed when model is open. To do show you have to attached two properties  to your body elements dynamically when model is open. i.e.<b>overflow: hidden; height: 100vh;</b></p> 

<div class="p-6 border rounded-t-lg text-center" style="font-family:Roboto">
    <a href="/editors/tailwind-css-modal-with-no-background-scroll-47ce1bfe4d40" class="leading-tight bg-blue-600 hover:text-gray-100 text-gray-200 rounded px-6 py-3 text-sm">Try Online</a>
 </div>
