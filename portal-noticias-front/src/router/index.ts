import { createRouter, createWebHistory } from 'vue-router'
import AppInicio from '../views/AppInicio.vue'
import AppMateria from '../views/AppMateria.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'materias',
      component: AppInicio
    },
    {
      path: '/materia/:id',
      name: 'materia',
      component: AppMateria,
      props: true
    }
  ]
})

export default router

