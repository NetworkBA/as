/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('header-component', require('./components/Header.vue').default);
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('footer-component', require('./components/Footer.vue').default);
Vue.component('loginv-component', require('./components/InicioSesion.vue').default);
Vue.component('registro-component', require('./components/Registro.vue').default);
Vue.component('formulario-component', require('./components/Formulario.vue').default);
Vue.component('contacto-component', require('./components/Contacto.vue').default);
Vue.component('programainv-component', require('./components/ProgramaIntervencion.vue').default);
Vue.component('sesiograma-component', require('./components/Sesiograma.vue').default);
Vue.component('miniexamen-component', require('./components/MiniExamen.vue').default);
Vue.component('entrevistaini-component', require('./components/Entrevistainicial.vue').default);
Vue.component('admin-component', require('./components/administrador.vue').default);
Vue.component('medicos-component', require('./components/Medicos.vue').default);
Vue.component('addMedico-component', require('./components/AddMedico.vue').default);
Vue.component('pacientes-component', require('./components/Pacientes.vue').default);
Vue.component('addpaciente-component', require('./components/AddPaciente.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
