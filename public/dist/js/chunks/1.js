(window.webpackJsonp=window.webpackJsonp||[]).push([[1],{"9SCf":function(e,n,t){(e.exports=t("I1BE")(!1)).push([e.i,'\n.CodeMirror {\n  font-family: "Source Code Pro", monospace;\n  height: 100vh !important;\n  overflow-y: hidden;\n}\n.CodeMirror-vscrollbar {\n  overflow-y: hidden !important;\n}\n* {\n  box-sizing: border-box;\n}\np {\n  color: darkslategray;\n}\n.dragbar {\n  padding: 6px;\n  cursor: col-resize;\n  background-color: silver;\n}\n@media screen and (max-width: 768px) {\n#drag-left {\n    width: 100% !important;\n}\n}\n@media screen and (min-width: 768px) {\n.drag-container {\n    display: flex;\n    min-height: 100vh;\n}\n.panel-code {\n    width: 50%;\n}\n.panel-output {\n    flex: 1;\n    width: calc(50% - 6px);\n}\n}\n',""])},BaQE:function(e,n,t){var o=t("9SCf");"string"==typeof o&&(o=[[e.i,o,""]]);var r={hmr:!0,transform:void 0,insertInto:void 0};t("aET+")(o,r);o.locals&&(e.exports=o.locals)},Et5b:function(e,n,t){"use strict";t.r(n);var o=t("j5TT"),r=(t("AQno"),{props:["initcode"],mounted:function(){var e=document.getElementById("drag-left"),n=(document.getElementById("drag-right"),document.getElementById("dragbar")),t=function(t){document.selection?document.selection.empty():window.getSelection().removeAllRanges(),e.style.width=t.pageX-n.offsetWidth/2+"px"};n.addEventListener("mousedown",(function(){document.addEventListener("mousemove",t)})),n.addEventListener("mouseup",(function(){document.removeEventListener("mousemove",t)}))},data:function(){return{code:this.initcode,cmOption:{tabSize:4,styleActiveLine:!0,lineNumbers:!0,line:!0,foldGutter:!0,styleSelectedText:!0,mode:"text/javascript",matchBrackets:!0,showCursorWhenSelecting:!0,theme:"dracula",extraKeys:{Ctrl:"autocomplete"},hintOptions:{completeSingle:!1}}}},components:{codemirror:o.codemirror}}),i=(t("UVpT"),t("KHd+")),d=Object(i.a)(r,(function(){var e=this,n=e.$createElement,t=e._self._c||n;return t("div",{staticClass:"md:flex w-full h-screen"},[t("div",{staticClass:"panel-code h-screen",attrs:{id:"drag-left"}},[t("codemirror",{attrs:{id:"_editor",options:e.cmOption},model:{value:e.code,callback:function(n){e.code=n},expression:"code"}})],1),e._v(" "),t("div",{staticClass:"hidden md:block dragbar",attrs:{id:"dragbar"}}),e._v(" "),t("div",{staticClass:"panel-output md:px-10 my-10 md:my-0",attrs:{id:"drag-right"}},[t("iframe",{staticClass:"w-full h-screen",attrs:{frameborder:"0",scrolling:"yes",srcdoc:e.code}})]),e._v(" "),t("action-button",{attrs:{code:e.code}})],1)}),[],!1,null,null,null);n.default=d.exports},UVpT:function(e,n,t){"use strict";var o=t("BaQE");t.n(o).a}}]);