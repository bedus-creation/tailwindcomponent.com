<template>
  <div class="flex">
    <div class="w-20" style="background-color:#2d3748;min-width:5rem;">
      <sidebar @run="execute"></sidebar>
    </div>
    <div class="flex-1">
      <div class="md:flex w-full h-screen">
        <editor-manaco
          v-model="code"
          class="w-full h-screen panel-code"
          :class="editor? 'hidden lg:block':'block lg:hidden'"
        ></editor-manaco>
        <iframe
          id="html"
          frameborder="0"
          scrolling="yes"
          class="w-full bg-white text-gray-700 h-screen z-10 shadow-lg"
          :class="editor ? 'block lg:hidden':'hidden lg:block'"
          :srcdoc="code"
        ></iframe>
        <action-button :code="code"></action-button>
      </div>
    </div>
  </div>
</template>
<script>
import { codemirror } from "vue-codemirror";
import EditorManaco from "../../components/EditorManaco";
import Sidebar from "../../components/Sidebar";
import "codemirror/theme/dracula.css";
export default {
  props: ["initcode"],
  mounted() {
    let vm = this;
    document.addEventListener("keydown", function(event) {
      if (event.ctrlKey && event.keyCode == 66) {
        vm.execute();
      }
    });
  },
  data() {
    return {
      code: this.initcode,
      show: false,
      editor: true
    };
  },
  components: {
    codemirror,
    Sidebar,
    EditorManaco
  },
  methods: {
    execute: function() {
      this.editor = !this.editor;
    }
  }
};
</script>

<style>
p {
  color: darkslategray;
}

.dragbar {
  padding: 6px;
  cursor: col-resize;
  background-color: silver;
}
@media screen and (max-width: 768px) {
  #drag-left {
    width: 100% !important;
  }
}
@media screen and (min-width: 768px) {
  .CodeMirror {
    height: calc(100vh - 60px) !important;
  }
  .drag-container {
    display: flex;
    min-height: 100vh;
  }
  .panel-code {
    width: 50%;
  }

  .panel-output {
    flex: 1;
    width: calc(50% - 6px);
  }
}
</style>
