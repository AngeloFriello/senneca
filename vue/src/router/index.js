import { createRouter, createWebHistory } from 'vue-router';
import HomeViews from '@/views/HomeViews.vue';
import Users from '@/components/Users.vue';
import UserShow from '@/components/UserShow.vue';
import CreateUser from '@/components/CreateUser.vue';
import EditUser from '@/components/EditUser.vue';


const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeViews,
    },
    {
      path: '/users/',
      name: 'users.index',
      component: Users,
    },
    {
      path: '/users/:id',
      name: 'users.show',
      props: true,
      component: UserShow,
    },
    {
      path: '/user/create',
      name: 'users.create',
      props: true,
      component: CreateUser
    },
    {
      path: '/user/edit/:id',
      name: 'users.edit',
      props: true,
      component: EditUser
    }
  ] 
})

export default router
