<template>
  <div>
    <div class="mt-4 px-4">
      <a href="/">
        <img src="/assets/img/logo-white.png" height="h-10" />
      </a>
    </div>
    <div class="flex justify-center my-8">
      <button
        @click="$emit('run')"
        class="border rounded focus:outline-none"
        title="Click ```Ctrl + B``` To toggle output "
      >
        <span
          class="flex items-center material-icons p-0 fill-current text-gray-300"
          style="font-size:42px"
        >play_arrow</span>
      </button>
    </div>
  </div>
</template>
