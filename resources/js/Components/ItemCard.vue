<template>
    <Link :href="url">
        <div class="p-4 flex flex-col m-2 items-center rounded-md justify-center bg-slate-800">
            <img :src="source_img" class="rounded-full" :alt="name">
            <p class="text-white font-extrabold text-2xl">{{name}}</p>
            <p class="text-white font-extrabold text-2xl">Click {{user}} for details</p>

        </div>
    </Link>
</template>

<script>
    import { Link } from '@inertiajs/inertia-vue3'
    export default {
        props: {
            name: {
                type: String,
                default: 'Noname'
            },
            source_img: {
                type:String,
                default:'https://picsum.photos/id/237/200/200'
            },
            url: {
                type: String,
                default: 'nothing'
            }
        },
        components: {
            Link,
        },    
    }
</script>
