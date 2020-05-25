<h1 class="text-gray-700 font-bold text-2xl md:text-3xl leading-snug">Tailwind css responsive Navbar</h1>

<hr class="border-t-2 border-b-0 border-gray-100 mt-2 mb-8">

<h2 class="font-bold mb-4 text-gray-700 text-xl">Tailwind Css responsive navbar in different Colour</h2>
<p class="my-4 leading-relaxed text-gray-700">Tailwind responsive navbar has been shown here. You can choose your prefer color and try out yourself in our online editors. AlpineJS has been used to acheive toggle functionality of navbar</p>
<div class="p-6 border rounded-t-lg text-center">
    <nav x-data="{show:false}" class="flex items-center justify-between flex-wrap bg-indigo-500 p-6">
    <div class="flex items-center flex-shrink-0 text-white mr-6">
        <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg>
        <span class="font-semibold text-xl tracking-tight">Tailwind CSS</span>
    </div>
    <div class="block md:hidden">
        <button @click="show=!show" class="flex items-center px-3 py-2 border rounded text-gray-100 border-gray-200 hover:text-white hover:border-white">
        <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
        </button>
    </div>
    <div @click.away="show = false" :class="{ 'block': show, 'hidden': !show }" class="w-full block flex-grow md:flex md:justify-end md:w-auto">
        <div>
        <a href="#" class="block md:inline-block text-sm px-4 py-2 leading-none rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 md:mt-0">Home</a>
        <a href="#" class="block md:inline-block text-sm px-4 py-2 leading-none rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 md:mt-0">Services</a>
        <a href="#" class="block md:inline-block text-sm px-4 py-2 leading-none rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 md:mt-0">Products</a>
        </div>
    </div>
    </nav>
    <nav x-data="{show:false}" class="flex items-center justify-between flex-wrap bg-teal-500 p-6">
    <div class="flex items-center flex-shrink-0 text-white mr-6">
        <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg>
        <span class="font-semibold text-xl tracking-tight">Tailwind CSS</span>
    </div>
    <div class="block md:hidden">
        <button @click="show=!show" class="flex items-center px-3 py-2 border rounded text-gray-100 border-gray-200 hover:text-white hover:border-white">
        <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
        </button>
    </div>
    <div @click.away="show = false" :class="{ 'block': show, 'hidden': !show }" class="w-full block flex-grow md:flex md:justify-end md:w-auto">
        <div>
        <a href="#" class="block md:inline-block text-sm px-4 py-2 leading-none rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 md:mt-0">Home</a>
        <a href="#" class="block md:inline-block text-sm px-4 py-2 leading-none rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 md:mt-0">Services</a>
        <a href="#" class="block md:inline-block text-sm px-4 py-2 leading-none rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 md:mt-0">Products</a>
        </div>
    </div>
    </nav>
    <nav x-data="{show:false}" class="flex items-center justify-between flex-wrap bg-green-500 p-6">
    <div class="flex items-center flex-shrink-0 text-white mr-6">
        <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg>
        <span class="font-semibold text-xl tracking-tight">Tailwind CSS</span>
    </div>
    <div class="block md:hidden">
        <button @click="show=!show" class="flex items-center px-3 py-2 border rounded text-gray-100 border-gray-200 hover:text-white hover:border-white">
        <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
        </button>
    </div>
    <div @click.away="show = false" :class="{ 'block': show, 'hidden': !show }" class="w-full block flex-grow md:flex md:justify-end md:w-auto">
        <div>
        <a href="#" class="block md:inline-block text-sm px-4 py-2 leading-none rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 md:mt-0">Home</a>
        <a href="#" class="block md:inline-block text-sm px-4 py-2 leading-none rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 md:mt-0">Services</a>
        <a href="#" class="block md:inline-block text-sm px-4 py-2 leading-none rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 md:mt-0">Products</a>
        </div>
    </div>
    </nav>
</div>

```html
<nav x-data="{show:false}" class="flex items-center justify-between flex-wrap bg-pink-500 p-6">
  <div class="flex items-center flex-shrink-0 text-white mr-6">
    <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg>
    <span class="font-semibold text-xl tracking-tight">Tailwind CSS</span>
  </div>
  <div class="block md:hidden">
    <button @click="show=!show" class="flex items-center px-3 py-2 border rounded text-gray-100 border-gray-200 hover:text-white hover:border-white">
      <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
    </button>
  </div>
  <div @click.away="show = false" :class="{ 'block': show, 'hidden': !show }" class="w-full block flex-grow md:flex md:justify-end md:w-auto">
    <div>
      <a href="#" class="block md:inline-block text-sm px-4 py-2 leading-none rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 md:mt-0">Home</a>
 	  <a href="#" class="block md:inline-block text-sm px-4 py-2 leading-none rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 md:mt-0">Services</a>
 	  <a href="#" class="block md:inline-block text-sm px-4 py-2 leading-none rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 md:mt-0">Products</a>
    </div>
  </div>
</nav>
```

<div class="p-6 border rounded-t-lg text-center mt-16" style="font-family:Roboto">
    <a href="/editors/tailwind-pink-responsive-navbar-gist-e8e7ae3b11e9" class="leading-tight bg-blue-600 hover:text-gray-100 text-gray-200 rounded px-6 py-3 text-sm">Try Online</a>
 </div>

<h2 class="font-bold mb-4 text-gray-700 text-xl mt-16">Long Horizontal scrolling navbar.</h2>
<p class="my-4 leading-relaxed text-gray-700">In this example navbar will scroll horizontally instead of being hidden in mobile screen.</p>

<div class="p-6 border rounded-t-lg text-center mt-16">
    <div class="container mx-auto md:px-20 px-2">
        <div class="flex justify-between whitespace-no-wrap overflow-x-auto overflow-y-hidden py-2">
            <a href="https://bedramtamang.com.np" class="flex items-center" style="min-width:16rem;">
                <img src="https://bedramtamang.com.np/img/profile.jpg" alt="Avatar of Jonathan Reinink" class="w-10 h-10 rounded-full mr-12 md:mr-0">
                <div class="px-2 hidden md:block">
                    It's me Bed.
                </div>
            </a>
            <div class="flex">
                <div class="px-3 py-3">
                    <a href="https://bedramtamang.com.np">
                        Home
                    </a>
                </div>
                <div class="px-3 py-3"><a href="/blogs">Blog</a></div>
                <div class="px-3 py-3">Services</div>
                <div class="px-3 py-3">Works</div>
                <div class="px-3 py-3">Open Source</div>
                <div class="pl-3 py-3"><a href="/about-me-bedram-tamang" class="bg-gray-500 hover:bg-blue-700 text-white font-bold py-2 px-8 rounded-full font-hairline">About Me</a></div>
            </div>
        </div>
    </div>
</div>

```html
<div class="container mx-auto md:px-20 px-2">
    <div class="flex justify-between whitespace-no-wrap overflow-x-auto overflow-y-hidden py-2">
        <a href="https://bedramtamang.com.np" class="flex items-center" style="min-width:16rem;">
            <img src="https://bedramtamang.com.np/img/profile.jpg" alt="Avatar of Jonathan Reinink" class="w-10 h-10 rounded-full mr-12 md:mr-0">
            <div class="px-2 hidden md:block">
                It's me Bed.
            </div>
        </a>
        <div class="flex">
            <div class="px-3 py-3">
                <a href="https://bedramtamang.com.np">
                    Home
                </a>
            </div>
            <div class="px-3 py-3"><a href="/blogs">Blog</a></div>
            <div class="px-3 py-3">Services</div>
            <div class="px-3 py-3">Works</div>
            <div class="px-3 py-3">Open Source</div>
            <div class="pl-3 py-3"><a href="/about-me-bedram-tamang" class="bg-gray-500 hover:bg-blue-700 text-white font-bold py-2 px-8 rounded-full font-hairline">About Me</a></div>
        </div>
    </div>
</div>
```
