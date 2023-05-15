<template>
  <div style="margin-bottom: 40px;">
    <Link href="/">Main Page</Link>&nbsp;
    <Link href="/show">Show page</Link>
  </div>
  <content>
    <div v-if="flashSuccess" class="success">
      {{ flashSuccess }}
    </div>
  </content>
  <slot />
  <!-- <h1>{{ timer }}</h1> -->
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import { usePage } from '@inertiajs/vue3'
import { computed } from 'vue'
const page = usePage()
const flashSuccess = computed(() => page.props.flash.message)
console.log(flashSuccess)

// import { ref } from 'vue'
// const timer = ref(0)
// setInterval(() => {
//   if(timer.value < 100) timer.value++
// }, 100)
</script>

<style scoped>
.success {
  background-color: green;
  color: white;
}
</style>
