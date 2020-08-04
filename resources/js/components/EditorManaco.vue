<template>
  <MonacoEditor
    theme="vs"
    language="html"
    :code="value"
    :options="options"
    @codeChange="onChange"
    srcPath="/assets/lib/monaco-editor/min"
  ></MonacoEditor>
</template>
<script>
// import MonacoEditor from "monaco-editor-vue";
import MonacoEditor from "../manaco/Manaco";
export default {
  props: ["value"],
  components: {
    MonacoEditor
  },
  data() {
    return {
      options: {}
    };
  },
  methods: {
    onChange(editor) {
      this.$emit("input", editor.getModel().getValue());
    }
  }
};
</script>
