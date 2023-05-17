<template>
  <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
    <Box v-for="listing in listings" :key="listing.id">
      <div>
        <Link :href="`/listing/${listing.id}`">
          <ListingSpace :listing="listing" class="text-lg" />
          <ListingAddress :listing="listing" class="text-gray-500" />
        </Link>
      </div>
      <div>
        <Link :href="`/listing/${listing.id}/edit`">Edit</Link>
      </div>
      <div>
        <Link :href="`/listing/${listing.id}`">Delete</Link>
      </div>
    </Box>
  </div>
</template>

<script setup>
import ListingAddress from '@/components/ListingAddress.vue'
import { Link } from '@inertiajs/vue3'
import Box from '@/components/UI/Box.vue'
import ListingSpace from '@/components/ListingSpace.vue'

defineProps({
  listings: Array,
})
</script>
