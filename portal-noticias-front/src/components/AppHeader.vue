<template>
    <header class="header">
      <img :src="Logo" alt="Simetra" />
    </header>
</template>
  

<script setup lang="ts">
import Logo from '@/assets/simetra_logo.png';
</script>
<style scoped>
  .header {
    background-color: #0DADAE;
    color: white;
    padding:10px;
    margin: 0;
    border: 0;
    text-align: center;
  }
</style>