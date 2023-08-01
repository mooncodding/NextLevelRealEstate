const routes = [
    {
        name: 'dashboard', path: '/dashboard', component: require('./admin/components/dashboard.vue').default
    },
    {
        name: 'roles', path: '/roles', component: require('./admin/components/roles.vue').default
    },
    {
        name: 'permissions', path: '/permissions', component: require('./admin/components/permissions.vue').default
    },
    {
        name: 'users', path: '/users', component: require('./admin/components/users.vue').default
    },
    {
        name: 'settings', path: '/settings', component: require('./admin/components/settings.vue').default
    },
    {
        name: 'profile', path: '/profile', component: require('./admin/components/profile.vue').default
    },
    {
        name: '/blogs', path: '/blogs', component: require('./web/components/blogs.vue').default
    },
    {
        name: '/example', path: '/example', component: require('./web/components/exampleComponent.vue').default
    },
];
export default routes;