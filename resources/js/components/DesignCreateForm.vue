<template>
  <form @submit.prevent="submit">
    <input type="hidden" v-model="form.slug" />
    <div class="mb-2">
      <label class="text-gray-700 font-light">Gist Title</label>
      <input v-model="form.title" type="text" class="w-full border rounded px-3 py-1 text-gray-700" />
    </div>
    <div class="mb-2">
      <label class="text-gray-700 font-light">Tell us more</label>
      <textarea v-model="form.description" class="px-3 w-full border rounded" rows="4"></textarea>
    </div>

    <div class="mb-2">
      <label class="text-gray-700 font-light">Your Email</label>
      <input
        v-model="form.email"
        type="email"
        class="w-full border rounded px-3 py-1 text-gray-700"
      />
    </div>
    <div>
      <button
        type="submit"
        class="bg-green-500 text-white rounded px-3 py-2 text-sm float-right"
      >Save Gist</button>
    </div>
  </form>
</template>
<script>
import axios from "axios";
import session from "../mixins/session";
export default {
  props: ["initcode"],
  mixins: [session],
  data() {
    return {
      form: {
        email: "",
        title: null,
        description: null,
        code: this.initcode,
        slug: this.$page.url
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
      let vm = this;
      axios
        .post("/editors", this.form)
        .then(response => this.onSuccess(response))
        .catch(error => this.flashError(error));
    },
    onSuccess(response) {
      this.$vToastify.success("You gonna kill people with this design.");
      this.$inertia.visit(response.data.link);
    }
  }
};
</script>
