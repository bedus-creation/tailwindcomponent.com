<template>
  <form>
    <div class="mb-2">
      <label class="text-gray-700 font-light">Gist Title</label>
      <input type="text" class="w-full border rounded px-3 py-1 text-gray-700" />
    </div>
    <div class="mb-2">
      <label class="text-gray-700 font-light">Catgories</label>
      <select class="w-full border bg-white rounded py-2">
        <option>Option 1</option>
        <option>Option 2</option>
        <option>Option 3</option>
      </select>
    </div>
    <div>
      <label class="text-gray-700 font-light">Tell us more</label>
      <textarea class="w-full border rounded" rows="4"></textarea>

      <button
        type="button"
        class="bg-green-500 text-white rounded px-3 py-2 text-sm float-right"
      >Save Gist</button>
    </div>
  </form>
</template>
