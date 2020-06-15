<h1 class="text-gray-700 font-bold text-2xl md:text-3xl leading-snug">Tailwind table </h1>

<hr class="border-t-2 border-b-0 border-gray-100 mt-2 mb-8">

<h2 class="font-bold mb-4 text-gray-700 text-xl">Tailwind Table: Basic Example</h2>

<p class="my-4 leading-relaxed text-gray-700">Important point here is we have used <b>whitespace-no-wrap</b> to make text inline. Table is wraped two div tags, to make proper overflow with padding around it. <b>Padding right</b> is ignored in most modern browser, so padding is added in wrapper div tags rather than in a table tags.  </p>
<div class="p-6 bg-gray-300 border rounded-t-lg" style="font-family:Roboto">
    <div class="bg-white rounded-lg shadow-lg py-6">
        <div class="block overflow-x-auto mx-6">
            <table class="w-full text-left rounded-lg">
                <thead>
                    <tr class="text-gray-800 border border-b-0">
                        <th class="px-4 py-3">#</th>
                        <th class="px-4 py-3">Name</th>
                        <th class="px-4 py-3">Avatar</th>
                        <th class="px-4 py-3">Email</th>
                        <th class="px-4 py-3">Status</th>
                        <th class="px-4 py-3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="w-full font-light text-gray-700 bg-gray-100 whitespace-no-wrap border border-b-0">
                        <td class="px-4 py-4">1</td>
                        <td class="px-4 py-4">Bedram Tamang</td>
                        <td class="px-4 py-4">
                            <img class="h-6 w-6 rounded-full"
                                src="/assets/docs/master/image-01.jpg">
                        </td>
                        <td class="px-4 py-4">tmgbedu@gmail.com</td>
                        <td class="px-4 py-4">
                            <span class="text-sm bg-green-500 text-white rounded-full px-2 py-1">Active</span>
                        </td>
                        <td class="text-center py-4">
                            <a href="#"><span class="fill-current text-green-500 material-icons">edit</span></a>
                            <a href="#"><span class="fill-current text-red-500 material-icons">highlight_off</span></a>
                        </td>
                    </tr>
                    <tr class="w-full font-light text-gray-700 whitespace-no-wrap border">
                        <td class="px-4 py-4">2</td>
                        <td class="px-4 py-4">Taylor Otwel</td>
                        <td class="px-4 py-4">
                            <img class="h-6 w-6 rounded-full"
                                src="/assets/docs/master/image-01.jpg">
                        </td>
                        <td class="px-4 py-4">taylow@laravel.com</td>
                        <td class="px-4 py-4">
                            <span class="text-sm bg-yellow-500 text-white rounded-full px-2 py-1">Pending</span>
                        </td>
                        <td class="text-center py-4">
                            <a href="#"><span class="fill-current text-green-500 material-icons">edit</span></a>
                            <a href="#"><span class="fill-current text-red-500 material-icons">highlight_off</span></a>
                        </td>
                    </tr>
                    <tr class="w-full font-light text-gray-700 bg-gray-100 whitespace-no-wrap border">
                        <td class="px-4 py-4">3</td>
                        <td class="px-4 py-4">Adam wathan</td>
                        <td class="px-4 py-4">
                            <img class="h-6 w-6 rounded-full"
                                src="/assets/docs/master/image-01.jpg">
                        </td>
                        <td class="px-4 py-4">tmgbedu@gmail.com</td>
                        <td class="px-4 py-4">
                            <span class="text-sm bg-red-500 text-white rounded-full px-2 py-1">Not Active</span>
                        </td>
                        <td class="text-center py-4">
                            <a href="#"><span class="fill-current text-green-500 material-icons">edit</span></a>
                            <a href="#"><span class="fill-current text-red-500 material-icons">highlight_off</span></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


```html
<div class="bg-white rounded-lg shadow-lg py-6">
    <div class="block overflow-x-auto mx-6">
        <table class="w-full text-left rounded-lg">
            <thead>
                <tr class="text-gray-800 border border-b-0">
                    <th class="px-4 py-3">#</th>
                    <th class="px-4 py-3">Name</th>
                    <th class="px-4 py-3">Avatar</th>
                    <th class="px-4 py-3">Email</th>
                    <th class="px-4 py-3">Status</th>
                    <th class="px-4 py-3">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr class="w-full font-light text-gray-700 bg-gray-100 whitespace-no-wrap border border-b-0">
                    <td class="px-4 py-4">1</td>
                    <td class="px-4 py-4">Bedram Tamang</td>
                    <td class="px-4 py-4">
                        <img class="h-6 w-6 rounded-full"
                            src="/assets/docs/master/image-01.jpg">
                    </td>
                    <td class="px-4 py-4">tmgbedu@gmail.com</td>
                    <td class="px-4 py-4">
                        <span class="text-sm bg-green-500 text-white rounded-full px-2 py-1">Active</span>
                    </td>
                    <td class="text-center py-4">
                        <a href="#"><span class="fill-current text-green-500 material-icons">edit</span></a>
                        <a href="#"><span class="fill-current text-red-500 material-icons">highlight_off</span></a>
                    </td>
                </tr>
                <tr class="w-full font-light text-gray-700 whitespace-no-wrap border">
                    <td class="px-4 py-4">2</td>
                    <td class="px-4 py-4">Taylor Otwel</td>
                    <td class="px-4 py-4">
                        <img class="h-6 w-6 rounded-full"
                            src="/assets/docs/master/image-01.jpg">
                    </td>
                    <td class="px-4 py-4">taylow@laravel.com</td>
                    <td class="px-4 py-4">
                        <span class="text-sm bg-yellow-500 text-white rounded-full px-2 py-1">Pending</span>
                    </td>
                    <td class="text-center py-4">
                        <a href="#"><span class="fill-current text-green-500 material-icons">edit</span></a>
                        <a href="#"><span class="fill-current text-red-500 material-icons">highlight_off</span></a>
                    </td>
                </tr>
                <tr class="w-full font-light text-gray-700 bg-gray-100 whitespace-no-wrap border">
                    <td class="px-4 py-4">3</td>
                    <td class="px-4 py-4">Adam wathan</td>
                    <td class="px-4 py-4">
                        <img class="h-6 w-6 rounded-full"
                            src="/assets/docs/master/image-01.jpg">
                    </td>
                    <td class="px-4 py-4">tmgbedu@gmail.com</td>
                    <td class="px-4 py-4">
                        <span class="text-sm bg-red-500 text-white rounded-full px-2 py-1">Not Active</span>
                    </td>
                    <td class="text-center py-4">
                        <a href="#"><span class="fill-current text-green-500 material-icons">edit</span></a>
                        <a href="#"><span class="fill-current text-red-500 material-icons">highlight_off</span></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
```

<h2 class="font-bold mb-4 text-gray-700 mt-16 text-xl">Tailwind Dark black Header table.</h2>

<p class="my-4 leading-relaxed text-gray-700"> <b>bg-gray-800</b> class is used in <b>tr</b> tag to make background dark with text color <b>text-gray-300</b> for dark header tailwind table. </p>

<div class="p-6 bg-gray-300 border rounded-t-lg" style="font-family:Roboto">
    <div class="bg-white rounded-lg shadow-lg py-6">
        <div class="block overflow-x-auto mx-6">
            <table class="w-full text-left rounded-lg">
                <thead>
                    <tr class="bg-gray-700 text-gray-200 border border-b-0">
                        <th class="px-4 py-3">#</th>
                        <th class="px-4 py-3">Name</th>
                        <th class="px-4 py-3">Avatar</th>
                        <th class="px-4 py-3">Email</th>
                        <th class="px-4 py-3">Status</th>
                        <th class="px-4 py-3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="w-full font-light text-gray-700 bg-gray-100 whitespace-no-wrap border border-b-0">
                        <td class="px-4 py-4">1</td>
                        <td class="px-4 py-4">Bedram Tamang</td>
                        <td class="px-4 py-4">
                            <img class="h-6 w-6 rounded-full"
                                src="/assets/docs/master/image-01.jpg">
                        </td>
                        <td class="px-4 py-4">tmgbedu@gmail.com</td>
                        <td class="px-4 py-4">
                            <span class="text-sm bg-green-500 text-white rounded-full px-2 py-1">Active</span>
                        </td>
                        <td class="text-center py-4">
                            <a href="#"><span class="fill-current text-green-500 material-icons">edit</span></a>
                            <a href="#"><span class="fill-current text-red-500 material-icons">highlight_off</span></a>
                        </td>
                    </tr>
                    <tr class="w-full font-light text-gray-700 whitespace-no-wrap border">
                        <td class="px-4 py-4">2</td>
                        <td class="px-4 py-4">Taylor Otwel</td>
                        <td class="px-4 py-4">
                            <img class="h-6 w-6 rounded-full"
                                src="/assets/docs/master/image-01.jpg">
                        </td>
                        <td class="px-4 py-4">taylow@laravel.com</td>
                        <td class="px-4 py-4">
                            <span class="text-sm bg-yellow-500 text-white rounded-full px-2 py-1">Pending</span>
                        </td>
                        <td class="text-center py-4">
                            <a href="#"><span class="fill-current text-green-500 material-icons">edit</span></a>
                            <a href="#"><span class="fill-current text-red-500 material-icons">highlight_off</span></a>
                        </td>
                    </tr>
                    <tr class="w-full font-light text-gray-700 bg-gray-100 whitespace-no-wrap border">
                        <td class="px-4 py-4">3</td>
                        <td class="px-4 py-4">Adam wathan</td>
                        <td class="px-4 py-4">
                            <img class="h-6 w-6 rounded-full"
                                src="/assets/docs/master/image-01.jpg">
                        </td>
                        <td class="px-4 py-4">tmgbedu@gmail.com</td>
                        <td class="px-4 py-4">
                            <span class="text-sm bg-red-500 text-white rounded-full px-2 py-1">Not Active</span>
                        </td>
                        <td class="text-center py-4">
                            <a href="#"><span class="fill-current text-green-500 material-icons">edit</span></a>
                            <a href="#"><span class="fill-current text-red-500 material-icons">highlight_off</span></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="p-6 border rounded-t-lg text-center mt-16" style="font-family:Roboto">
    <a href="/editors/gray-header-table-c6c5044e4f3c" class="leading-tight bg-blue-600 hover:text-gray-100 text-gray-200 rounded px-6 py-3 text-sm">Try Online</a>
</div>

<h2 class="font-bold mb-4 text-gray-700 text-xl">Tailwind Dark Table</h2>
<p class="my-4 leading-relaxed text-gray-700">Completely dark table is acheived using background class <b>bg-gray-700</b> and  <b>bg-gray-600</b> in alternating fashion.</b></p>
<div class="p-6 bg-gray-300 border rounded-t-lg" style="font-family:Roboto">
    <div class="bg-white rounded-lg shadow-lg py-6">
        <div class="block overflow-x-auto mx-6">
            <table class="w-full text-left rounded-lg">
                <thead>
                    <tr class="bg-gray-700 text-gray-200 border border-b-0">
                        <th class="px-4 py-3">#</th>
                        <th class="px-4 py-3">Name</th>
                        <th class="px-4 py-3">Avatar</th>
                        <th class="px-4 py-3">Email</th>
                        <th class="px-4 py-3">Status</th>
                        <th class="px-4 py-3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="w-full bg-gray-600 text-gray-200 font-light whitespace-no-wrap border border-b-0">
                        <td class="px-4 py-4">1</td>
                        <td class="px-4 py-4">Bedram Tamang</td>
                        <td class="px-4 py-4">
                            <img class="h-6 w-6 rounded-full"
                                src="/assets/docs/master/image-01.jpg">
                        </td>
                        <td class="px-4 py-4">tmgbedu@gmail.com</td>
                        <td class="px-4 py-4">
                            <span class="text-sm bg-green-500 text-white rounded-full px-2 py-1">Active</span>
                        </td>
                        <td class="text-center py-4">
                            <a href="#"><span class="fill-current text-green-500 material-icons">edit</span></a>
                            <a href="#"><span class="fill-current text-red-500 material-icons">highlight_off</span></a>
                        </td>
                    </tr>
                    <tr class="w-full font-light bg-gray-700 text-gray-300 whitespace-no-wrap border">
                        <td class="px-4 py-4">2</td>
                        <td class="px-4 py-4">Taylor Otwel</td>
                        <td class="px-4 py-4">
                            <img class="h-6 w-6 rounded-full"
                                src="/assets/docs/master/image-01.jpg">
                        </td>
                        <td class="px-4 py-4">taylow@laravel.com</td>
                        <td class="px-4 py-4">
                            <span class="text-sm bg-yellow-500 text-white rounded-full px-2 py-1">Pending</span>
                        </td>
                        <td class="text-center py-4">
                            <a href="#"><span class="fill-current text-green-500 material-icons">edit</span></a>
                            <a href="#"><span class="fill-current text-red-500 material-icons">highlight_off</span></a>
                        </td>
                    </tr>
                    <tr class="w-full bg-gray-600 text-gray-200 font-light bg-gray-100 whitespace-no-wrap border">
                        <td class="px-4 py-4">3</td>
                        <td class="px-4 py-4">Adam wathan</td>
                        <td class="px-4 py-4">
                            <img class="h-6 w-6 rounded-full"
                                src="/assets/docs/master/image-01.jpg">
                        </td>
                        <td class="px-4 py-4">tmgbedu@gmail.com</td>
                        <td class="px-4 py-4">
                            <span class="text-sm bg-red-500 text-white rounded-full px-2 py-1">Not Active</span>
                        </td>
                        <td class="text-center py-4">
                            <a href="#"><span class="fill-current text-green-500 material-icons">edit</span></a>
                            <a href="#"><span class="fill-current text-red-500 material-icons">highlight_off</span></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="p-6 border rounded-t-lg text-center mt-16" style="font-family:Roboto">
    <a href="editors/completely-dark-table-978a4d61fa0e" class="leading-tight bg-blue-600 hover:text-gray-100 text-gray-200 rounded px-6 py-3 text-sm">Try Online</a>
</div>
