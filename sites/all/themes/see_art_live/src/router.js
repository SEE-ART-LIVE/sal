import Vue from 'vue';
import Router from 'vue-router';
import Event from './components/Event.vue';
import Homepage from './components/Homepage.vue';
import Default from './components/Default.vue';
import PageNotFound from './components/PageNotFound.vue';

Vue.use(Router);

export default new Router({
  mode: 'history',
  routes: [
    {
      path: '/',
      name: 'Homepage',
      component: Homepage,
      children: [
        { 
          path: '404', 
          from: '*', 
          component: PageNotFound 
        }
      ]
    },
    {
      path: '/event/:id',
      name: 'Event',
      component: Event,
      children: [
        { 
          path: '404', 
          from: '*', 
          component: PageNotFound 
        }
      ]
    },
    {
      path: '/about',
      name: 'About',
      component: Default,
      children: [
        { 
          path: '404', 
          from: '*', 
          component: PageNotFound 
        }
      ]
    },
    {
      path: '/contact',
      name: 'Contact',
      component: Default,
      children: [
        { 
          path: '404', 
          from: '*', 
          component: PageNotFound 
        }
      ]
    },
    {
      path: '/work',
      name: 'Work',
      component: Default,
      children: [
        { 
          path: '404', 
          from: '*', 
          component: PageNotFound 
        }
      ]
    },
    { 
      path: '/user' 
    },
    { 
      path: '/admin' 
    },
    { 
      path: '/node' 
    },
    { 
      path: "*", 
      component: PageNotFound,
      children: [
        { 
          path: '404', 
          from: '*', 
          component: PageNotFound 
        }
      ]
    }
  ],
});
