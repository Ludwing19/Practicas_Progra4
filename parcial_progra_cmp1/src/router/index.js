import Vue from "vue";
import VueRouter from "vue-router";
//import HomeView from "../views/HomeView.vue";
import WelcomeUser from "../views/WelcomeUser.vue";
import QuieneSomos from "../views/QuieneSomos.vue"
import CalcularDatos from "../views/CalcularDatos.vue";



Vue.use(VueRouter);

const routes = [
  /*{
    path: "/",
    name: "home",
    component: HomeView,
  },*/
  {
    path: "/",
    name: "WelcomeUser",
    component: WelcomeUser,
  },

  {
    path: "/Quienes_Somos",
    name: "quieneSomos",
    component: QuieneSomos,
  },

  {
    path: "/CalcularDatos",
    name: "calculardatos",
    component: CalcularDatos,
  },

  {
    path: "/about",
    name: "about",
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () =>
      import(/* webpackChunkName: "about" */ "../views/AboutView.vue"),
  },
];

const router = new VueRouter({
  routes,
});

export default router;
