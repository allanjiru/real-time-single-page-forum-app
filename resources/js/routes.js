import Home from './components/Home/Home.vue';
import NotFound from './components/Nothing/Nothing.vue';
import Login from './components/Login/Login.vue';

const routes =[
    {
        path: '*',
        component: NotFound
    },
    {
        path:'/',
        component:Home,
        name:'Home'
    },
    {
        path:'/login',
        component:Login,
        name:'Login'
    },
];

export default {
    mode: 'history', 
    hashbang:false,
    routes
};
