import Home from '../views/Home'
import Add from '../views/Add'
import Report from '../views/Report'
import UpdateUser from '../views/UpdateUser'
import UserDetail from '../views/UserDetail'
import Login from '../views/Login'
// import Profile from '../views/Profile'
// import Register from '../views/Register'

export default {
    mode: 'history',

    linkActiveClass: 'bg-indigo-600 text-white',

    routes: [{
            path: '/',
            name: 'login',
            component: Login,
        },
        // {
        //     path: '/regist',
        //     name: 'register',
        //     component: Register,

        // },
        // {
        //     path: '/:userId',
        //     name: 'user',
        //     component: Profile,
        //     props: true,
        //     meta: {
        //         requiresAuth: true
        //     }
        // },
        {
            path: '/dashboard',
            name: 'dashboard',
            component: Home,
            // beforeEnter: (to, form, next) => {
            //     axios.get('/api/athenticated').then(() => {
            //         next()
            //     }).catch(() => {
            //         return next({
            //             name: 'login'
            //         })
            //     })
            // }
        },
        {
            path: '/add',
            name: 'add',
            component: Add,
        },
        {
            path: '/report',
            name: 'report',
            component: Report,
        },
        {
            path: '/report/update/:id',
            name: 'UpdateUser',
            component: UpdateUser,
        },
        {
            path: '/report/detail/:id',
            name: 'UserDetail',
            component: UserDetail,
        },
    ]
}
