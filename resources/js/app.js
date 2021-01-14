import Vue from 'vue';
window._ = require("lodash");

require('./utils/flash.js');
Vue.component('FileInput', () => import('./components/FileInput'));
Vue.component('MarkdownEditor', () => import('./components/MarkdownEditor'));

const app = new Vue({
    el: '#app',
});

