import { createRouter, createWebHistory } from 'vue-router';
import HomeViews from '@/views/HomeViews.vue';
import Users from '@/components/Users.vue';
import UserShow from '@/components/UserShow.vue';


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
    }
  ]
})

export default router
