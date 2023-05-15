<template>
  <div style="margin-bottom: 40px;">
    <Link href="/listing">Listings</Link>&nbsp;
    <Link href="/listing/create">Add new listing</Link>
  </div>
  <content>
    <div v-if="flashSuccess" class="success">
      {{ flashSuccess }}
    </div>
  </content>
  <slot />
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import { usePage } from '@inertiajs/vue3'
import { computed } from 'vue'

const page = usePage()
const flashSuccess = computed(() => page.props.flash.success)
</script>

<style scoped>
.success {
  background-color: green;
  color: white;
  padding: 6px;
  margin-bottom: 10px;
  border-radius: 4px;
}
</style>
