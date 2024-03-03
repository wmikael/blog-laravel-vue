<template>
  <n-card title="Card with Cover" style="cursor: pointer;" @click="redirectToMateria">
    <template #cover>
      <img :src="props.materia!.image" alt="Imagem da Matéria" class="materia-image" />
    </template>
    <div class="materia-details">
      <h2>{{ props.materia!.title }}</h2>
      <p>{{ props.materia!.id }}</p>
      <p class="description">{{ props.materia!.description }}</p>
      <p class="published-at">{{ formatPublishedDate(props.materia!.published_at) }}</p>
    </div>
  </n-card>
</template>

<script setup lang="ts">
import { defineProps } from 'vue'
import { NCard } from 'naive-ui'
import moment from 'moment'
import { useRoute, useRouter } from 'vue-router';

const router = useRouter()
const route = useRoute()

const props = defineProps({
  materia: Object
})

const formatPublishedDate = (dateString: string) => {
  const formattedDate = moment(dateString).format('DD/MM/YYYY HH:mm')
  return formattedDate
}

function redirectToMateria() {
  router.push({
    name: 'materia',
    params: {
      id: props.materia!.id // Supondo que o ID da matéria esteja disponível nas props
    },
  })
}
</script>

<style scoped>

</style>
