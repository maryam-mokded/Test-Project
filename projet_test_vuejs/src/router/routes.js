import Home from '../components/views/Home.vue';

export default[
    {
      path: "/home",
      name: "Home",
      component: Home,
    },
    {
      path: '/', 
      redirect: '/home' 
    },
    {
      path: "/about",
      name: "About",
      component: () =>
        import("../components/views/About.vue"),
    },
    {
      path: "/update/:id?",
      name: "UpdateEmployee",
      component: () =>
        import("../components/views/UpdateEmployee.vue"),
    },
    {
      path: "/add",
      name: "AddEmployee",
      component: () =>
        import("../components/views/AddEmployee.vue"),
    },
    {
      path: "/details/:id?",
      name: "Details",
      component: () =>
        import("../components/views/DétailsEmployee.vue"),
    },
    {
      path: "**",
      name: "NotFoundPage",
      component: () =>
        import("../components/NotFoundPage.vue"),
    },    
  ];


