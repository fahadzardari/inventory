<template>
    <div class="container mx-auto flex justify-between bg-slate-800 rounded-sm drop-shadow-lg">
        <div class="flex flex-row ">
            <Link href="/"><button class="px-4 py-3 text-white font-bold hover:bg-slate-600">Home</button></Link>
            <Link><button class="px-4 py-3 text-white font-bold hover:bg-slate-600">About</button></Link>

             
        </div>
       
        <div>
            <Link><button class="px-4 py-3 text-white font-bold hover:bg-slate-600">Settings</button></Link>
            <Link href="/logout"><button class="px-4 py-3 text-white font-bold hover:bg-slate-600">Logout</button></Link>

        </div>

    </div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3'
    
    export default {
        components: {
            Link,
        },    
    }
</script>
