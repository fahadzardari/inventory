<template>
  <tr>
    <td class="border px-8 py-4">{{ id }}</td>
    <td class="border px-8 py-4">{{ item_name }}</td>
    <td class="border px-8 py-4">
      {{ quantity }}
    </td>
    <td class="border px-8 py-4">{{ time_added }}</td>
    <td class="border px-8 py-4">
      <button
        class="bg-black text-white font-bold mx-2 p-2 rounded-md shadow-md"
      >
        Edit
      </button>
      <button
        @click="deleteItem(id, type_of_item)"
        class="bg-red-800 text-white font-bold p-2 rounded-md shadow-md"
      >
        Delete
      </button>
    </td>
  </tr>
</template>

<script>
import axios from 'axios';
export default {
  props: {
    id: {
      type: Number,
      default: 0,
    },
    type_of_item: {
      type: Number,
      default: 0,
    },
    item_name: {
      type: String,
      default: "Noname",
    },
    quantity: {
      type: Number,
      default: 0,
    },
    time_added: {
      type: Number,
      default: "sdfsdf",
    },
  },
  methods: {
    deleteItem(id, type_of_item) {
      //  alert(id);

      if (confirm("Are you sure?")) {
        this.$inertia.post("/user/list/delete/" + type_of_item + "/" + id);
      } else {
        alert("nthin");
      }
    },
    
  },
};
</script>

