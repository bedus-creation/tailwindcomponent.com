<h1 class="text-gray-700 font-bold text-2xl md:text-3xl leading-snug">Tailwind Carousel Example with Slider Js</h1>

<hr class="border-t-2 border-b-0 border-gray-100 mt-2 mb-8">

<h2 class="font-bold mb-4 text-gray-700 text-xl">Basic Carousel</h2>
<p class="my-4 leading-relaxed text-gray-700">By default Tailwind css doesnot support carousel, so we need to depend on other third parties library to achieve this. So we will achieve tailwind carousel using slider js step by step.</p>

<img class="w-full" alt="Basic Carousel" src="/assets/docs/master/image-03.gif">

<div class="p-6 border rounded-t-lg text-center mt-16" style="font-family:Roboto">
    <a href="/editors/slider-example-in-tailwind-css-c8667624be30" class="leading-tight bg-blue-600 hover:text-gray-100 text-gray-200 rounded px-6 py-3 text-sm">Try Carousel Online</a>
 </div>

<h2 class="font-bold mb-4 text-gray-700 text-xl mt-16">Step 1: Add Slider js From cdn.</h3>
<p class="my-4 leading-relaxed text-gray-700">Cdn is a fast way to test library with out downloading into your disks. You may download and use from your local computer if you require.</p>

```html
<script src="https://unpkg.com/swiper/js/swiper.js"></script>
<script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
```


<h2 class="font-bold mb-4 text-gray-700 text-xl mt-16">Step 2: Write Sliding content</h3>
<p class="my-4 leading-relaxed text-gray-700">Let's add two slider with image in each of one from unsplash. The slider content should be inside <b>swiper-slide</b> class.</p>

```html
<div class="swiper-container h-64">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
          <img src="https://source.unsplash.com/weekly?water">
        </div>
        <div class="swiper-slide">
          <img src="https://source.unsplash.com/weekly?mountain">
        </div>
    </div>
</div>
```

<h2 class="font-bold mb-4 text-gray-700 text-xl mt-16">Step 3: Initiate slider script for our slider</h3>
<p class="my-4 leading-relaxed text-gray-700">This is the basic carousel exmple with no next and previous buttons, and even with out pagination button as well. We will explore full professional loogin carousel in next example.</p>

```html
<script>
  var mySwiper = new Swiper ('.swiper-container');
</script>
```

<div class="p-6 border rounded-t-lg text-center mt-16" style="font-family:Roboto">
    <a href="/editors/slider-basic-examples-2c54ab5eb739" class="leading-tight bg-blue-600 hover:text-gray-100 text-gray-200 rounded px-6 py-3 text-sm">Try Basic Carousel Online</a>
 </div>


<h2 class="font-bold mb-4 text-gray-700 text-xl mt-16">Customer Feedback/Happy Client Carousel style with tailwind css.</h3>
<img class="w-full mt-16" alt="Basic Carousel" src="/assets/docs/master/image-04.gif">

<div class="p-6 border rounded-t-lg text-center mt-16" style="font-family:Roboto">
    <a href="/editors/carousel-tailwind-css-swiper-js-customers-testimonials-examples-b7792af93ee9" class="leading-tight bg-blue-600 hover:text-gray-100 text-gray-200 rounded px-6 py-3 text-sm">Try Online</a>
 </div>
