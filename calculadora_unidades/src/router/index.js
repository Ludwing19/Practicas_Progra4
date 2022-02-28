import Vue from 'vue'
import VueRouter from 'vue-router'
import HomeView from '../views/HomeView.vue'
import Operaciones from '../views/Operaciones.vue'
import Operaciones2 from "../views/Operaciones2.vue";
import Operaciones3 from "../views/Operaciones3.vue";
import Operaciones4 from "../views/Operaciones4.vue";
import Operaciones5 from "../views/Operaciones5.vue";



Vue.use(VueRouter)

const routes = [
  /*{
    path: "/",
    name: "home",
    component: HomeView,
  },*/

  {
    path: "/",
    name: "Operaciones",
    component: Operaciones,
  },

  {
    path: "/Operaciones2",
    name: "Operaciones2",
    component: Operaciones2,
  },

  {
    path: "/Operaciones3",
    name: "Operaciones3",
    component: Operaciones3,
  },

  {
    path: "/Operaciones4",
    name: "Operaciones4",
    component: Operaciones4,
  },

  {
    path: "/Operaciones5",
    name: "Operaciones5",
    component: Operaciones5,
  },

  {
    path: "/about",
    name: "about",
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: function () {
      return import(/* webpackChunkName: "about" */ "../views/AboutView.vue");
    },
  },
];

const router = new VueRouter({
  routes
})

export default router
