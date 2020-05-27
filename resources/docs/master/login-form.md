<h1 class="text-gray-700 font-bold text-2xl md:text-3xl leading-snug">11 Login Form Examples using Tailwind Css</h1>

<hr class="border-t-2 border-b-0 border-gray-100 mt-2 mb-8">
<style>
    @media screen and (max-width:768px){
        #blur-image{
            height:20rem;
        }
    }
</style>
<h2 class="font-bold mb-4 text-gray-700 text-xl">1. Login Form with background blur Image</h2>
<p class="my-4 leading-relaxed text-gray-700">Login Form Example with background blur image.</p>
<div class="relative px-0" style="font-family:Roboto">
    <div id="blur-image" class="w-full md:h-screen py-4" style="filter: blur(6px); background-image:url('/assets/docs/master/image-01.jpg')"></div>
    <div class="absolute w-4/5 md:w-3/5 bg-white rounded-lg" style="transform: translate(-50%, -50%); top:50%; left:50%">
        <div class="flex justify-center -mt-10">
            <img class="border-2 w-20 h-20 rounded-full" src="/assets/docs/master/image-01.jpg">
        </div>
        <div class="px-12 py-10">
            <div class="w-full mb-3">
                <div class="flex items-center">
                    <i class='ml-3 fill-current text-gray-400 text-xs z-10 far fa-user'></i>
                    <input type='text' placeholder="Username" class="-mx-6 px-8  w-full border rounded py-2 text-gray-700 focus:outline-none" />
                </div>
            </div>
            <div class="w-full mb-2">
                <div class="flex items-center">
                    <i class='ml-3 fill-current text-gray-400 text-xs z-10 fas fa-lock'></i>
                    <input type='text' placeholder="Password" class="-mx-6 px-8 w-full border rounded py-2 text-gray-700 focus:outline-none" />
                </div>
            </div>
            <div class="mt-8 flex justify-between">
                <div class="flex items-center">
                    <input type="checkbox" class="w-4 h-4 mr-2" id="remember">
                    <label class="text-xs text-gray-700" for="remember">Remember Me</label>
                </div>
                <div>
                    <button type='text' class="bg-yellow-400 text-xs text-gray-700 rounded px-4 py-2">SIGN IN</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="p-6 border rounded-t-lg text-center mt-16" style="font-family:Roboto">
    <a href="/editors/login-form-aae3bf9c13e3" class="leading-tight bg-blue-600 hover:text-gray-100 text-gray-200 rounded px-6 py-3 text-sm">Try Online</a>
</div>
