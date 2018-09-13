
import Vue from 'vue';
import LaravelTranslation from './LaravelTranslation';

Vue.use(LaravelTranslation);
Vue.component('example-component', require('./components/ExampleComponent.vue'));


const app = new Vue({
    el: '#app'
});
