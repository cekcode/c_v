import Vue from 'vue'
import Router from 'vue-router'
import Profile from '@/components/Profile'
import Dashboard from '@/components/Dashboard'
import Pelayanan from '@/components/Pelayanan'
import NotFoundView from '@/components/NotFoundView'

Vue.use(Router)


export default new Router({
  mode : 'history',
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
      path: '/admin/Pelayanan',
      name: 'Pelayanan',
      component: Pelayanan
    },
    {
      path: '/*',
      component: NotFoundView
    }

  ]
})