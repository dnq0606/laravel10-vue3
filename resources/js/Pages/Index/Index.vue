<template>
    <div>Index page</div>
    <div>
      <p>The message is {{message}}</p>
    </div>
</template>

<script setup>

defineProps({
  message: String
})

</script>