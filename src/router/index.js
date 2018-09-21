import Vue from 'vue'
import Router from 'vue-router'
import Profile from '@/components/Profile'
import Dashboard from '@/components/Dashboard'
import Layanan from '@/components/Layanan'
import NotFoundView from '@/components/NotFoundView'

Vue.use(Router)


export default new Router({
  mode : 'history',
  base : '/c_v',
  routes: [
  	{	
      path: '/',
      name: 'Dashboard',
      component: Dashboard
    },
    {
      path: '/admin/Dashboard',
      name: 'Dashboard',
      component: Dashboard
    },
    {
      path: '/admin/Profile',
      name: 'Profile',
      component: Profile
    },
    {
      path: '/admin/Layanan',
      name: 'Layanan',
      component: Layanan
    },
    {
      path: '/*',
      component: NotFoundView
    }

  ]
})