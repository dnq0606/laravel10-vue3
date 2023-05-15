<template>
  <div class="container">
    <form @submit.prevent="create">
      <label for="beds">beds</label>
      <input id="beds" v-model.number="form.beds" type="text" />

      <label for="baths">baths</label>
      <input id="baths" v-model.number="form.baths" type="text" />

      <label for="area">area</label>
      <input id="area" v-model.number="form.area" type="text" />

      <label for="city">city</label>
      <input id="city" v-model="form.city" type="text" />

      <label for="code">code</label>
      <input id="code" v-model="form.code" type="text" />

      <label for="street">street</label>
      <input id="street" v-model="form.street" type="text" />

      <label for="street_nr">street_nr</label>
      <input id="street_nr" v-model.number="form.street_nr" type="text" />

      <label for="price">Price</label>
      <input id="price" v-model.number="form.price" type="text" />


      <button type="submit">Submit</button>
    </form>
  </div>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3'

const form = useForm({
  beds: 0,
  baths: 0,
  area: 0,
  city: null,
  code: null,
  street: null,
  street_nr: null,
  price: 0,
})


const create = () => form.post('/listing', form)

</script>

<style scoped>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input, select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

button[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
