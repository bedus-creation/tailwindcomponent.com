<template>
  <div class="flex w-full h-screen">
    <div id="drag-left" class="panel-code h-screen">
      <codemirror id="_editor" :options="cmOption" v-model="code"></codemirror>
    </div>
    <div id="dragbar" class="dragbar"></div>
    <div id="drag-right" class="panel-output px-20">
      <iframe class="w-full h-screen" :srcdoc="code"></iframe>
    </div>
  </div>
</template>
<script>
import { codemirror } from "vue-codemirror";
import "codemirror/lib/codemirror.css";
import "codemirror/theme/dracula.css";
export default {
  props: ["initcode"],
  mounted() {
    var left = document.getElementById("drag-left");
    var right = document.getElementById("drag-right");
    var bar = document.getElementById("dragbar");

    const drag = e => {
      document.selection
        ? document.selection.empty()
        : window.getSelection().removeAllRanges();
      left.style.width = e.pageX - bar.offsetWidth / 2 + "px";
    };

    bar.addEventListener("mousedown", () => {
      document.addEventListener("mousemove", drag);
    });

    bar.addEventListener("mouseup", () => {
      document.removeEventListener("mousemove", drag);
    });
  },
  data() {
    return {
      code: this.initcode,
      cmOption: {
        tabSize: 4,
        styleActiveLine: true,
        lineNumbers: true,
        line: true,
        foldGutter: true,
        styleSelectedText: true,
        mode: "text/javascript",
        matchBrackets: true,
        showCursorWhenSelecting: true,
        theme: "dracula",
        extraKeys: { Ctrl: "autocomplete" },
        hintOptions: {
          completeSingle: false
        }
      }
    };
  },
  components: {
    codemirror
  }
};
</script>

<style>
.CodeMirror {
  font-family: "Source Code Pro", monospace;
  height: 100vh !important;
  overflow-y: hidden;
}
.CodeMirror-vscrollbar {
  overflow-y: hidden !important;
}
* {
  box-sizing: border-box;
}

p {
  color: darkslategray;
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

.dragbar {
  padding: 6px;
  cursor: col-resize;
  background-color: silver;
}
</style>
