<template>
  <Box>
    <div>
      <Link :href="`/listing/${listing.id}`">
        <div class="flex items-center gap-1">
          <Price :price="listing.price" class="text-2xl font-bold" />
          <div class="text-xs text-gray-500">
            <Price :price="monthlyPayment" />
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
</template>

<script setup>
import ListingAddress from '@/components/ListingAddress.vue'
import { Link } from '@inertiajs/vue3'
import Box from '@/components/UI/Box.vue'
import ListingSpace from '@/components/ListingSpace.vue'
import Price from '@/components/Price.vue'
import {useMonthlyPayment} from '@/Composables/useMonthlyPayment'
import { ref } from 'vue'

const props = defineProps({
  listing: Object,
})

const interestRate = ref(2.5)
const duration = ref(25)

const {monthlyPayment} = useMonthlyPayment(props.listing.price, interestRate, duration)
</script>
