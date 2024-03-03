<template>
  <div class="app">
    <AppHeader />
    <!-- Componente de cabeçalho -->
    <RouterView />
    <!-- Componente de visualização de rotas -->
    <AppFooter class="footer" />
    <!-- Componente de rodapé -->
  </div>
</template>

<script setup lang="ts">
import { RouterView } from 'vue-router'
import AppHeader from './components/AppHeader.vue'
import AppFooter from './components/AppFooter.vue'
</script>

<style>
.app {
  font-family: Arial, sans-serif;
  display: flex;
  flex-direction: column;
}

.footer {
  left: 0;
  bottom: 0;
  width: 100%;
}
</style>
