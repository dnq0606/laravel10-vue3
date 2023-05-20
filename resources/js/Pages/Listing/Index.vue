<template>
  <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
    <Box v-for="listing in listings" :key="listing.id">
      <div>
        <Link :href="`/listing/${listing.id}`">
          <div class="flex items-center gap-1">
            <Price :price="listing.price" class="text-2xl font-bold" />
            <div class="text-xs text-gray-500">
              <Price :price="400" />
            </div>
          </div>
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
import Price from '@/components/Price.vue'

defineProps({
  listings: Array,
})
</script>
