import Vue from 'vue'
import Router from 'vue-router'
import HelloWorld from '@/components/HelloWorld'
import Index from '@/components/Index'
import Star from '@/components/Star'
import Search from '@/components/Search'
import Me from '@/components/Me'
import Detail from '@/components/Detail'
import Login from '@/components/Login'
Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'HelloWorld',
      component: HelloWorld
    },
    {
      path: '/index',
      name: 'Index',
      component: Index
    },
    {
      path: '/star',
      name: 'Star',
      component: Star
    },
    {
      path: '/search',
      name: 'Search',
      component: Search
    },
    {
      path: '/me',
      name: 'Me',
      component: Me
    },
    {
      path: '/detail/:id',
      name: 'Detail',
      component: Detail
    },
    {
      path: '/login',
      name: 'Login',
      component: Login
    },
    {
      path: '/*',
      redirect:'/index'
    }
  ]
})
