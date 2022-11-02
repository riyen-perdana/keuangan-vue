import { createRouter, createWebHistory } from "vue-router";

//admin
import homeAdminIndex from '../components/admin/home/index.vue';

//pages
import homePageIndex from '../components/pages/home/index.vue';

//NotFound Page
import notFound from '../components/notFound.vue';

//Login
import login from '../components/auth/login.vue';

const routes = [
    //admin
    {
        path : '/admin/home',
        component : homeAdminIndex
    },

    //pages
    {
        path : '/',
        component : homePageIndex
    },

    //notFound
    {
        path : '/:pathMatch(.*)*',
        component : notFound
    },

    //Login
    {
        path : '/login',
        component : login
    }
]

const router = createRouter({
    history : createWebHistory(),
    routes,
})

export default router