<template>
  <div class="blog">
    <h1>Blog</h1>
    <n-grid cols="s:1 m:2 l:3 xl:4 2xl:6" :x-gap="20" responsive="screen">
      <n-grid-item v-for="(materia, index) in materias" :key="index">
        <CardMateria :materia="materia" />
      </n-grid-item>
      <n-grid-item> </n-grid-item>
    </n-grid>
    <NPagination style="margin-top: 50px;"
      :total="totalDeMaterias"
      v-model:page="paginaAtual"
      :pageCount="totalDePaginas"
      @update:page="handlePaginaChange"
    />
  </div>
</template>

<script setup lang="ts">
import { ref, onMounted } from 'vue'
import { NGrid, NGridItem, NPagination } from 'naive-ui'
import axios from 'axios'
import CardMateria from '../components/CardMateria.vue'

const materias = ref([])
const totalDeMaterias = ref(0)
const itensPorPagina = 10
const paginaAtual = ref(1)
const totalDePaginas = ref(0)

onMounted(async () => {
  try {
    await carregarMaterias()
  } catch (error) {
    console.error('Erro ao carregar matérias:', error)
  }
})

const carregarMaterias = async () => {
  const response = await axios.get(
    `http://localhost:9191/api/articles?page=${paginaAtual.value}&per_page=${itensPorPagina}`
  )
  materias.value = response.data.data
  totalDeMaterias.value = response.data.total
  totalDePaginas.value = response.data.last_page
}

const handlePaginaChange = async (page) => {
  paginaAtual.value = page
  await carregarMaterias()
}
</script>

<style>
.blog {
  margin: 50px;
}
</style>
