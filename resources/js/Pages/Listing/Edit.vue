<template>
  <div class="container">
    <form @submit.prevent="update">
      <div class="mb-5px">
        <label for="beds">beds</label>
        <input id="beds" v-model.number="form.beds" type="text" />
        <div v-if="form.errors.beds" class="error">{{ form.errors.beds }}</div>
      </div>
      <div class="mb-5px">
        <label for="baths">baths</label>
        <input id="baths" v-model.number="form.baths" type="text" />
        <div v-if="form.errors.baths" class="error">{{ form.errors.baths }}</div>
      </div>
      <div class="mb-5px">
        <label for="area">area</label>
        <input id="area" v-model.number="form.area" type="text" />
        <div v-if="form.errors.area" class="error">{{ form.errors.area }}</div>
      </div>

      <div class="mb-5px">
        <label for="city">city</label>
        <input id="city" v-model="form.city" type="text" />
        <div v-if="form.errors.city" class="error">{{ form.errors.city }}</div>
      </div>

      <div class="mb-5px">
        <label for="code">code</label>
        <input id="code" v-model="form.code" type="text" />
        <div v-if="form.errors.code" class="error">{{ form.errors.code }}</div>
      </div>

      <div class="mb-5px">
        <label for="street">street</label>
        <input id="street" v-model="form.street" type="text" />
        <div v-if="form.errors.street" class="error">{{ form.errors.street }}</div>
      </div>
      <div class="mb-5px">
        <label for="street_nr">street_nr</label>
        <input id="street_nr" v-model.number="form.street_nr" type="text" />
        <div v-if="form.errors.street_nr" class="error">{{ form.errors.street_nr }}</div>
      </div>

      <div class="mb-5px">
        <label for="price">Price</label>
        <input id="price" v-model.number="form.price" type="text" />
        <div v-if="form.errors.price" class="error">{{ form.errors.price }}</div>
      </div>

      <button type="submit">Submit</button>
    </form>
  </div>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3'
const props = defineProps({
  listing: Object,
})
const form = useForm({
  beds: props.listing.beds,
  baths: props.listing.baths,
  area: props.listing.area,
  city: props.listing.city,
  code: props.listing.code,
  street: props.listing.street,
  street_nr: props.listing.street_nr,
  price: props.listing.price,
})


const update = () => form.put(`/listing/${props.listing.id}`, form)

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
  margin-bottom: 2px;
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

.mb-5px {
  margin-bottom: 5px;
}

.error {
  color: red;
}
</style>
