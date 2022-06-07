<template>
  <NavBar />
  <div class="grid grid-cols-4 md:grid-cols-3 sm:grid-cols-1 container mx-auto">
    <div v-for="type_of_item in type_of_items" :key="type_of_item.id">
      <ItemCard
        :url="`/user/list/` + type_of_item.id"
        :source_img="`https://picsum.photos/id/236/200`"
        :name="type_of_item.item_name"
      />
    </div>

  </div>
  <Link href="/user/addcategory">
      <button class="text-white p-3 text-xl rounded-xl bg-slate-800 sticky" style="bottom:1%;left:88%;">
        Add Category
      </button>
  </Link>
</template>

<script>
import NavBar from "@/Components/NavBar.vue";
import ItemCard from "@/Components/ItemCard.vue";
import { Link } from "@inertiajs/inertia-vue3";
import axios from 'axios';

export default {
  components: {
    Link,
    NavBar,
    ItemCard,
    axios,
},
  props: {
    type_of_items: {
      type: Array,
      default: [],
    },
  },
  methods:{

  }
};
</script>
