import Vue from 'vue';
import VueRouter from 'vue-router';
import '../honaki_assets/css/style.css';
import HeaderComponent from "./components/HeaderComponent";
import BeforeHeaderComponent from "./components/BeforeHeaderComponent";
import TopComponent from "./components/TopComponent";
import BudgetCreateComponent from "./components/BudgetCreateComponent";
import SpendCreateComponent from "./components/SpendCreateComponent";
import SpendEditComponent from "./components/SpendEditComponent";
import ProfileComponent from "./components/ProfileComponent";
import ProfileEditComponent from "./components/ProfileEditComponent";
import ErrorComponent from "./components/ErrorComponent";
import Ad_HeaderComponent from "./components/admin/Ad_HeaderComponent";
import Ad_TopComponent from "./components/admin/Ad_TopComponent";
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/top',
            name: 'top',
            component: TopComponent
        },
        {
            path: '/budget_create',
            name: 'budget.create',
            component: BudgetCreateComponent
        },
        {
            path: '/spend/create',
            name: 'spend.create',
            component: SpendCreateComponent
        },
        {
            path: '/spend/:spendId/edit',
            name: 'spend.edit',
            component: SpendEditComponent,
            props: true
        },
        {
            path: '/profile',
            name: 'profile',
            component: ProfileComponent,
        },
        {
            path: '/profile/:profileId/edit',
            name: 'profile.edit',
            component: ProfileEditComponent,
            props: true
        },
        {
            path: '/error',
            name: 'error',
            component: ErrorComponent,
        },
        {
            path: '/admin',
            name: 'admin',
            component: Ad_TopComponent,
        },
    ]
});

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
Vue.component('header-component', HeaderComponent);
Vue.component('before-header-component', BeforeHeaderComponent);
Vue.component('top-component', TopComponent);
Vue.component('ad-header-component', Ad_HeaderComponent);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router
});
