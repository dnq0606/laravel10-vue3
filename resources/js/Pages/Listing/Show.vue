<template>
  <div class="flex flex-col-reverse md:grid md:grid-cols-12 gap-4">
    <Box class="md:col-span-7 flex items-center">
      <div class="text-center w-full font-medium text-gray-500">
        <span>No images</span>
      </div>
    </Box>
    <div class="md:col-span-5 flex flex-col gap-4">
      <Box>
        <template #header>
          <span>Basic info</span>
        </template>
        <Price :price="listing.price" class="text-2xl font-bold" />
        <ListingSpace :listing="listing" class="text-lg" />
        <ListingAddress :listing="listing" class="text-gray-500" />
      </Box>
      <Box>
        <template #header>
          Monthly Payment
        </template>
        <div>
          <label class="label">Interest rate ({{ interestRate }}%)</label>
          <input
            v-model="interestRate"
            type="range" min="0.1" max="30" step="0.1"
            class="input w-full h-4 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700"
          />

          <label class="label">Duration ({{ duration }} years)</label>
          <input
            v-model="duration"
            type="range" min="3" max="35" step="1"
            class="input w-full h-4 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700"
          />

          <div class="text-gray-600 dark:text-gray-300 mt-2">
            <div class="text-gray-400">Your monthly payment</div>
            <Price :price="monthlyPayment" class="text-3xl" />
          </div>
          <div class="mt-2 text-gray-500">
            <div class="flex justify-between ">
              <div>Total paid</div>
              <div>
                <Price :price="totalPaid" class="font-medium" />
              </div>
            </div>
          </div>
          <div class="mt-2 text-gray-500">
            <div class="flex justify-between ">
              <div>Principal interest</div>
              <div>
                <Price :price="listing.price" class="font-medium" />
              </div>
            </div>
          </div>
          <div class="mt-2 text-gray-500">
            <div class="flex justify-between ">
              <div>Total interest</div>
              <div>
                <Price :price="totalInterest" class="font-medium" />
              </div>
            </div>
          </div>
        </div>
      </Box>
    </div>
  </div>
</template>

<script setup>
import ListingAddress from '@/components/ListingAddress.vue'
import ListingSpace from '@/components/ListingSpace.vue'
import Price from '@/components/Price.vue'
import Box from '@/components/UI/Box.vue'
import { ref } from 'vue'
import {useMonthlyPayment} from '@/Composables/useMonthlyPayment'

const props = defineProps({
  listing: Object,
})

const interestRate = ref(2.5)
const duration = ref(25)

const {monthlyPayment, totalPaid, totalInterest} = useMonthlyPayment(props.listing.price, interestRate, duration)

</script>
