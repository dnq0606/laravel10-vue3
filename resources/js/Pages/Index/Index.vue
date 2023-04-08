<script setup>
import {Link} from "@inertiajs/vue3";
defineProps({
  message: String
})

</script>

<template>
  <div>
    Index 1
  </div>
  <Link href="/show">Show page</Link>
  <div>
    <p>The message is {{message}}</p>
  </div>
</template>

