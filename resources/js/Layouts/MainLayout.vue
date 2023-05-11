<template>
  <Link href="/">Main Page</Link>&nbsp;
  <Link href="/show">Show page</Link>
  <slot />
  <h1>{{ timer }}</h1>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import { ref } from 'vue'
const timer = ref(0)
setInterval(() => {
  if(timer.value < 100) timer.value++
}, 100)
</script>

<style scoped>

</style>