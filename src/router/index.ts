import { createRouter, createWebHistory } from '@ionic/vue-router';
import { RouteRecordRaw } from 'vue-router';
import Home from '../views/Home.vue'
import Menu from '../views/Menu.vue'
import Login from '../views/Login.vue'
import Register from '../views/Register.vue'


const routes: Array<RouteRecordRaw> = [
  {
    path: '/',
    redirect: '/home'
  },
  {
    path: '/home',
    name: 'Home',
    component: Home
  },
  {
    path: '/',
    redirect: '/menu'
  },
  {
    path: '/menu',
    name: 'Menu',
    component: Menu
  },
  {
    path: '/',
    redirect: '/login'
  },
  {
    path: '/login',
    name: 'Login',
    component: Login
  },
  {
    path: '/',
    redirect: '/register'
  },
  {
    path: '/register',
    name: 'Register',
    component: Register
  },
  {
    path: '/',
    redirect: '/lista'
  },
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
