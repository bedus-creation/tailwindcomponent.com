<template>
  <div>
    <Button
      type="button"
      @click="show= !show"
      class="fixed bg-blue-600 text-gray-200 rounded-full px-6 py-4 z-20"
      style="bottom:20px; right:20px"
    >+</Button>
    <div
      v-show="show"
      class="fixed top-0 right-0 h-screen bg-gray-100 p-8 shadow z-10"
      style="width:24rem"
    >
      <design-create-form :initcode="code"></design-create-form>
    </div>
  </div>
</template>
<script>
export default {
  props: ["code"],
  data() {
    return {
      show: false
    };
  }
};
</script>
