(window.webpackJsonp=window.webpackJsonp||[]).push([[7],{"9oMb":function(e,t,i){"use strict";i.r(t);var n={props:{name:{type:String,required:!0},src:{},maxnumber:{type:Number,default:1}},data:function(){return{maxNumber:this.maxnumber,id:0,files:[]}},computed:{getFiles:function(){var e=new DataTransfer;return _.each(this.files,(function(t){e.items.add(t.file)})),e.files}},methods:{getName:function(){return this.maxNumber<=1?this.name:this.name+"[]"},validateMaxNumber:function(e){if(this.maxNumber>=e+this.files.length)return!0;var t="No more than "+this.maxNumber+" File is allowed";throw window.flash().error(t),new Error(t)},chooseFile:function(e){this.$refs.files.click()},handleFilesUpload:function(){var e=this,t=this.$refs.files.files;this.validateMaxNumber(t.length);for(var i=0;i<t.length;i++)e.files.push({id:e.id+1,file:t.item(i),src:this.readUrl(t.item(i),e.id+1),name:t.item(i).name}),e.id=e.id+1;this.$refs.files.files=this.getFiles},remove:function(e){var t=this.files.findIndex((function(t){return t.id==e}));this.files.splice(t,1)},readUrl:function(e,t){var i=this,n=new FileReader;n.onload=function(e){var n=i.files.findIndex((function(e){return e.id==t}));i.files[n].src=e.target.result},n.readAsDataURL(e)}}},r=i("KHd+"),s=Object(r.a)(n,(function(){var e=this,t=e.$createElement,i=e._self._c||t;return i("div",[i("input",{ref:"files",staticClass:"hidden",attrs:{type:"file",name:e.getName(),multiple:""},on:{change:function(t){return e.handleFilesUpload()}}}),e._v(" "),i("div",{staticClass:"border-4 border-dashed border-gray-500 w-full bg-white h-20 px-6 flex items-center justify-center rounded-lg",on:{click:e.chooseFile}},[i("p",[e._v("Click Here to Upload")])]),e._v(" "),e._l(e.files,(function(t){return i("div",{key:t.id},[i("div",{staticClass:"flex items-center bg-gray-100 pl-2 pr-4 py-2 rounded-lg my-1"},[i("img",{staticClass:"border-2 border-white rounded-lg w-12 h-10 shadow",attrs:{src:t.src}}),e._v(" "),i("div",{staticClass:"flex-1 px-3"},[i("span",{staticClass:"text-gray-800"},[e._v(e._s(t.name))])]),e._v(" "),i("div",{staticClass:"cursor-pointer",on:{click:function(i){return e.remove(t.id)}}},[e._v("×")])])])}))],2)}),[],!1,null,null,null);t.default=s.exports},"KHd+":function(e,t,i){"use strict";function n(e,t,i,n,r,s,a,o){var l,d="function"==typeof e?e.options:e;if(t&&(d.render=t,d.staticRenderFns=i,d._compiled=!0),n&&(d.functional=!0),s&&(d._scopeId="data-v-"+s),a?(l=function(e){(e=e||this.$vnode&&this.$vnode.ssrContext||this.parent&&this.parent.$vnode&&this.parent.$vnode.ssrContext)||"undefined"==typeof __VUE_SSR_CONTEXT__||(e=__VUE_SSR_CONTEXT__),r&&r.call(this,e),e&&e._registeredComponents&&e._registeredComponents.add(a)},d._ssrRegister=l):r&&(l=o?function(){r.call(this,(d.functional?this.parent:this).$root.$options.shadowRoot)}:r),l)if(d.functional){d._injectStyles=l;var c=d.render;d.render=function(e,t){return l.call(t),c(e,t)}}else{var f=d.beforeCreate;d.beforeCreate=f?[].concat(f,l):[l]}return{exports:e,options:d}}i.d(t,"a",(function(){return n}))}}]);