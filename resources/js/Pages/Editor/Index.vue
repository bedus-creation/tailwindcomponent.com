<template>
  <div class="md:flex w-full h-screen">
    <div class="md:hidden p-6 border bg-white text-center rounded-t-lg mt-16">
      <a
        href="#"
        @click.prevent="show=!show"
        class="leading-tight bg-blue-600 hover:text-gray-100 text-gray-200 rounded px-6 py-3 text-sm"
      >Show Code</a>
    </div>
    <div id="drag-left" class="panel-code md:block" :class="{'block':show, 'hidden':!show}">
      <codemirror id="_editor" :options="cmOption" v-model="code"></codemirror>
    </div>
    <div id="dragbar" class="hidden md:block dragbar"></div>
    <div id="drag-right" class="panel-output bg-white md:px-10 my-2 py-20 md:py-0 md:my-0">
      <iframe frameborder="0" scrolling="yes" class="w-full h-64 md:h-screen" :srcdoc="code"></iframe>
    </div>
    <action-button :code="code"></action-button>
  </div>
</template>
<script>
import { codemirror } from "vue-codemirror";
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
      show: false,
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
