<template>
  <span>{{ formmatedPrice }}</span>
</template>

<script setup>
import {computed} from "vue";
const props = defineProps({
  price: [Number, String],
});

const formmatedPrice = computed(
  () => Number(props.price).toLocaleString('es-US', {
    style: 'currency',
    currency: 'USD',
    maximunFractionDigits: 2,
  }),
)
</script>
