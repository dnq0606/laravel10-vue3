<template>
  <div>
    <span class="font-bold">{{ listing.beds }}</span> beds |
    <span class="font-bold">{{ listing.baths }}</span> baths |
    <span class="font-bold">{{ listing.area }}</span> area
  </div>
</template>
<script setup>
defineProps({
  listing: Object,
})
</script>
