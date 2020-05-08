<template>
  <form @submit.prevent="submit">
    <div class="mb-2">
      <label class="text-gray-700 font-light">Gist Title</label>
      <input v-model="form.title" type="text" class="w-full border rounded px-3 py-1 text-gray-700" />
      <div v-if="$page.errors.title">{{ $page.errors.title[0] }}</div>
    </div>
    <div>
      <label class="text-gray-700 font-light">Tell us more</label>
      <textarea v-model="form.description" class="w-full border rounded" rows="4"></textarea>
      <button
        type="submit"
        class="bg-green-500 text-white rounded px-3 py-2 text-sm float-right"
      >Save Gist</button>
    </div>
  </form>
</template>
<script>
export default {
  props: ["initcode"],
  data() {
    return {
      form: {
        title: null,
        description: null,
        code: this.initcode
      }
    };
  },
  watch: {
    initcode: function(newVal, oldVal) {
      this.form.code = newVal;
    }
  },
  methods: {
    submit() {
      this.$inertia.post("/editors", this.form).then(() => this.onSuccess());
    },
    onSuccess() {
      this.$vToastify.success("You gonna kill people with this design.");
      //   this.$inertia.visits();
    }
  }
};
</script>
