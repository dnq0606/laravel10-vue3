<template>
  <div style="margin-bottom: 40px;">
    <Link href="/listing">Listings</Link>&nbsp;
    <Link href="/listing/create">Add new listing</Link>
  </div>

  <header class="border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800">
    <div class="container mx-auto">
      <nav class="flex justify-between items-center p-4">
        <div class="text-lg font-medium">
          <Link href="/listing">Listings</Link>
        </div>
        <div class="text-lg font-medium text-indigo-800">
          <Link href="/listing">LazaZillow</Link>
        </div>
        <div class="text-lg font-medium">
          <Link href="/listing/create">Add new listing</Link>
        </div>
      </nav>
    </div>
  </header>

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
