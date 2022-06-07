<template>
  <NavBar />
  <div class="container mx-auto">
    <form @submit.prevent="addCategory">
      <div class="flex flex-col p-10 items-center justify-center">
        <h1 class="text-2xl">Add Item</h1>

        <input class="mt-5 text-center placeholder:text-gray-400" v-model="category"  type="text" placeholder="Item Name" />
          <button
            type = "submit"
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
  data(){
      return {
          category:""
      }
  },
  methods:{
      addCategory(){
          this.$inertia.post('/user/addcategory' , {'category' : this.category});
      }
  }
};
</script>
