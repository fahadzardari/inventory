<template>
    <div class="flex justify-center items-center h-screen min-h-screen">
        <div class="w-4/12 border-2 border-white rounded-lg bg-slate-900 bg-opacity-80 shadow-lg     p-24"> 
       <div class="flex flex-col items-center">
           <input placeholder="Item Name" v-model="form.email"  class="p-2 border-transparent text-center text-lg focus:border-black rounded-md ">
           
            <input type="password" placeholder="*********" v-model="form.password" class="border-transparent focus:border-black p-2 mt-4 text-center text-lg rounded-md "> <br> <br>
            <button @click="login" class="p-2 bg-white rounded-md text-black font-bold">Login</button>
            
       </div>
        </div>
    </div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';
export default {
        components: {
            Link,
        },
        data() {
        
            return {
                    item: {
                        name:'',
                        image_url :''
                    }
            }
        },
        methods: {
            login() {
                this.$inertia.post('/login' , {'item' : this.item});
                
            }
        },
   
}
</script>