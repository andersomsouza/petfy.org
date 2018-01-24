import 'reset-css';
import 'materialize-css/dist/css/materialize.css';


import Vue from 'vue';
import VueRouter from 'vue-router';
import Explorar from './components/explorar/Explorar.vue';
import App from './App.vue';

Vue.use(VueRouter);

const routes = [
    {path:'/', component: Explorar}
]
const router = new VueRouter({routes});

const app = new Vue({
    el: '#app',
    router,
    render: h => h(App)
});
