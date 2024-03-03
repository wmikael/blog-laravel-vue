<template>
  <div class="container">
    <div v-if="materia" class="materia">
      <h2>{{ materia.title }}</h2>
      <img :src="materia.image" alt="Imagem da Matéria" class="materia-image" />
      <p>{{ materia.description }}</p>
      <p>{{ materia.content }}</p>
      <p class="published-at">{{ formatPublishedDate(materia.published_at) }}</p>
    </div>
  </div>
</template>

<script setup lang="ts">
import { ref, onMounted } from 'vue'
import { useRoute } from 'vue-router'
import axios from 'axios'
import moment from 'moment'

const id = useRoute().params.id
const materia = ref<Materia | null>(null)

type Materia = {
  id: number
  title: string
  description: string
  content: string
  image: string
  published_at: string
}

onMounted(async () => {
  try {
    const response = await axios.get<Materia>(`http://localhost:9191/api/articles/${id}`)
    materia.value = response.data
  } catch (error) {
    console.error('Erro ao buscar matéria:', error)
  }
})

const formatPublishedDate = (dateString: string) => {
  return moment(dateString).format('DD/MM/YYYY HH:mm')
}
</script>

<style scoped>
.container {
  margin: 50px;
  align-items: center;
  justify-content: center;
}
</style>
