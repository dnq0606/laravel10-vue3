<template>
  <header class="border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800">
    <div class="container mx-auto">
      <nav class="flex justify-between items-center p-4">
        <div class="text-lg font-medium">
          <Link href="/listing">Listings</Link>
        </div>
        <div class="text-lg text-indigo-600 dark:text-indigo-300 font-bold text-center">
          <Link href="/">LazaZillow</Link>
        </div>
        <div class="text-lg font-medium">
          <Link href="/listing/create" class="btn-primary">+ Add new listing</Link>
        </div>
      </nav>
    </div>
  </header>

  <main class="container mx-auto p-4">
    <div v-if="flashSuccess" class="mb-4 border rounded-md shadow-sm border-green-200 dark:border-gray-800 bg-green-50 dark:bg-green-900 p-2">
      {{ flashSuccess }}
    </div>
    <slot />
  </main>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import { usePage } from '@inertiajs/vue3'
import { computed } from 'vue'

const page = usePage()
const flashSuccess = computed(() => page.props.flash.success)
</script>
