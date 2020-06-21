import { InertiaApp } from '@inertiajs/inertia-vue'
import Vue from 'vue'

Vue.use(InertiaApp)

// Components Registration
// Vue.component('EditorPage', () => import('./components/EditorPage'));
Vue.component('DesignCreateForm', () => import('./components/DesignCreateForm'));
Vue.component('ActionButton', () => import('./components/ActionButton'));
Vue.component('ActionButton', () => import('./components/ActionButton'));

// Use Toastify
import VueToastify from "vue-toastify";
Vue.use(VueToastify);

const app = document.getElementById('app')

new Vue({
    render: h => h(InertiaApp, {
        props: {
            initialPage: JSON.parse(app.dataset.page),
            resolveComponent: name => import(`./Pages/${name}`).then(module => module.default),
        },
    }),
}).$mount(app)
