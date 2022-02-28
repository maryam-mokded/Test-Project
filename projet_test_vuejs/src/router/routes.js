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
      path: "/contact",
      name: "Contact",
      component: () =>
        import("../components/views/Contact.vue"),
    },
    {
      path: "**",
      name: "NotFoundPage",
      component: () =>
        import("../components/NotFoundPage.vue"),
    },    
  ];


