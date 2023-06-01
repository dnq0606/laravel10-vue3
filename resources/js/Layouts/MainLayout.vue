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
        <div v-if="user" class="flex items-center gap-4">
          <Link class="text-sm text-gray-500" href="/listing">{{ user.name }}</Link>
          <Link href="/listing/create" class="btn-primary">+ New Listing</Link>
          <div>
            <Link href="/login/destroy" method="delete" as="button">Logout</Link>
          </div>
        </div>
        <div v-else class="flex items-center gap-2">
          <Link href="/login">Sign-In</Link>
        </div>
      </nav>
    </div>
  </header>

  <main class="container mx-auto p-4 w-full">
    <div v-if="flashSuccess" class="mb-4 border rounded-md shadow-sm border-green-200 dark:border-gray-800 bg-green-50 dark:bg-green-900 p-2">
      {{ flashSuccess }}
    </div>
    <slot />
  </main>
</template>

<script setup>

import { computed } from 'vue'
import { Link, usePage } from '@inertiajs/vue3'

const page = usePage()
const flashSuccess = computed(
  () => page.props.flash.success,
)
const user = computed(
  () => page.props.user,
)

</script>
