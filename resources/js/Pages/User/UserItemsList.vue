<template>
  <NavBar />
  <div class="container mx-auto mt-5">
    <table class="shadow-lg bg-white w-full text-center">
      <thead >
        <tr >
          <th class="bg-slate-800 text-white border px-8 py-4">Id</th>
          <th class="bg-slate-800 text-white border px-8 py-4">Item</th>
          <th class="bg-slate-800 text-white border px-8 py-4">Quantity</th>
          <th class="bg-slate-800 text-white border px-8 py-4">Date Added</th>
          <th class="bg-slate-800 text-white border px-8 py-4">Actions</th>
        </tr>
      </thead>
      <tbody class="" v-for="item in items" :key="item.id">
        <ItemsList
          :id="item.id"
          :item_name="item.item_name"
          :quantity="item.quantity"
          :time_added="item.created_at"
          :type_of_item="item.type_of_item_id"
        />
      </tbody>
    </table>

        <button @click="add" class="float-right text-white bg-green-600 px-3 py-1 mt-5 rounded-md">
          Add item
        </button>

  </div>
</template>

<script>
import NavBar from "@/Components/NavBar.vue";
import ItemsList from "@/Components/ItemsList.vue";
import {Link} from "@inertiajs/inertia-vue3";
export default {
  components: {
    NavBar,
    ItemsList,
    Link
  },
  props: {
    items: {
      type: Array,
      default: [],
    },
  },
  methods: {
    test() {
      alert(this.items[1].item_name);
    },
    add(){
        this.$inertia.get('/user/add');
    }
  },
};
</script>
