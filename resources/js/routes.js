import vue from 'vue';

import VueRouter from 'vue-router';

vue.use(VueRouter);

const Router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/home',
            name: 'hola',
            component: Home
        },
    ]
})

export default router;