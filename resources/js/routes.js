const routes = [
    // Admin Routes
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
        name: 'countries', path: '/countries', component: require('./admin/components/countries.vue').default
    },
    {
        name: 'tags', path: '/tags', component: require('./admin/components/tags.vue').default
    },
    {
        name: 'propertyTypes', path: '/propertyTypes', component: require('./admin/components/propertyTypes.vue').default
    },
    {
        name: 'propertyStatus', path: '/propertyStatus', component: require('./admin/components/propertyStatus.vue').default
    },
    {
        name: 'developers', path: '/developers', component: require('./admin/components/developers.vue').default
    },
    {
        name: 'amenities', path: '/amenities', component: require('./admin/components/amenities.vue').default
    },
    //  Web Routs
    {
        name: '/blogs', path: '/blogs', component: require('./web/components/blogs.vue').default
    },
    {
        name: '/example', path: '/example', component: require('./web/components/exampleComponent.vue').default
    },
];
export default routes;