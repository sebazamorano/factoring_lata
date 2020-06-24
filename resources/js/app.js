/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
window.Swal = require('sweetalert2');
window.moment = require('moment');
moment().format();
window.numeral = require('numeral');
window.locales = require('numeral/locales');
window.numeral.locale('es');


import { ValidationProvider, extend, ValidationObserver } from 'vee-validate';
import { messages } from 'vee-validate/dist/locale/es.json';
import * as rules from 'vee-validate/dist/rules';
import { rutValidator } from "vue-dni";

Object.keys(rules).forEach(rule => {
    extend(rule, {
        ...rules[rule], // copies rule configuration
        message: messages[rule] // assign message
    });
});

extend('rut',rutValidator);

Vue.component('ValidationProvider', ValidationProvider);
Vue.component('ValidationObserver', ValidationObserver);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('Administradores', require('./components/Administradores/Index').default);
Vue.component('AdministradoresCreate', require('./components/Administradores/Create').default);
Vue.component('AdministradoresEdit', require('./components/Administradores/Edit').default);
Vue.component('Ejecutivos', require('./components/Ejecutivos/Index').default);
Vue.component('EjecutivosCreate', require('./components/Ejecutivos/Create').default);
Vue.component('EjecutivosEdit', require('./components/Ejecutivos/Edit').default);
Vue.component('Factories', require('./components/Factories/Index').default);
Vue.component('FactoriesCreate', require('./components/Factories/Create').default);
Vue.component('FactoriesEdit', require('./components/Factories/Edit').default);
Vue.component('Clientes', require('./components/Clientes/Index').default);
Vue.component('ClientesCreate', require('./components/Clientes/Create').default);
Vue.component('MisOfertas', require('./components/MisOfertas').default);
Vue.component('cotiza-component', require('./components/CotizaComponent.vue').default);

Vue.filter('moneyFormat', valor => {
    return numeral(valor).format('$0,0');
});
Vue.filter('dateFormat', valor => {
    return moment(valor).format('L');
});



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import { rutInputDirective } from 'vue-dni';

Vue.directive('rut', rutInputDirective);

const app = new Vue({
    el: '#app',
});
