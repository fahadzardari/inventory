<template>
  <NavBar />
  <div
    class="
      container
      mx-auto
    "
   >
      <form @submit.prevent="addItem">
    <div class="flex flex-col p-10 items-center justify-center">
          <h1 class="text-2xl">Add Item</h1>
          <input class="mt-5 text-center placeholder:text-gray-400" v-model="item.name" type="text" placeholder="Item Name" />
          <input class="mt-5 text-center placeholder:text-gray-400" v-model="item.quantity" type="number" placeholder="Quantity" />
          <select class="mt-5 rounded-md ">
            <option
              v-for="type_of_item in type_of_items"
              :key="type_of_item.id"
              :value="type_of_item.id"
            >
              {{ type_of_item.item_name }}
            </option>
          </select>
          <button

            class="float-right text-white bg-green-600 px-3 py-1 mt-5 rounded-md"
          >
            Add item
          </button>
    </div>
      </form>
    </div>
</template>

<script>
import NavBar from "@/Components/NavBar.vue";

export default {
  components: {
    NavBar,
  },
  data() {
    return {
      item: {
        name: "",
        quantity: "",
        category_id: "",
      },
    };
  },
  props: {
    type_of_items: {
      type: Array,
      default: [],
    },
  },
  methods: {
    addItem() {

      this.item.category_id = document.querySelector("select").value;
      this.$inertia.post('/user/additem' , {'item' : this.item});
    },
  },
};
</script>
