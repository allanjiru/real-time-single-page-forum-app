require('./bootstrap');
import VueRouter from 'vue-router';
import Index from './Index.vue';
import routes from './routes';

window.Vue = require('vue');

Vue.use(VueRouter);
import User from './Helpers/User';
import AppStorage from './Helpers/AppStorage';
window.User = User;
window.AppStorage = AppStorage;

console.log(User.id());
const app = new Vue({
    el: '#app',
    components: {
        "index": Index,
    },
    router: new VueRouter(routes),
});
