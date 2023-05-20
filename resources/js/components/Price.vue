<template>
  <span>{{ formmatedPrice }}</span>
</template>

<script setup>
import {computed} from 'vue'
const props = defineProps({
  price: [Number, String],
})

const formmatedPrice = computed(
  () => Number(props.price).toLocaleString(
    'en-US',
    {
      style:'currency',
      currency:'USD',
      minimumFractionDigits: 0,
    }),
)
</script>
