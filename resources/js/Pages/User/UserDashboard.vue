<template>
<NavBar />
<div class="grid grid-cols-4 md:grid-cols-3 sm:grid-cols-1 container mx-auto ">
<div v-for="user in users" :key="user.id">
<ItemCard :url="`/user/list?id=` + user.id" :source_img="`https://picsum.photos/id/236/200`" :name="user.name" />

</div>


</div>
</template>

<script>
    import NavBar from '@/Components/NavBar.vue'
    import ItemCard from '@/Components/ItemCard.vue'
    
    export default {
            components: {
                NavBar,
                ItemCard
            },
            props: {
                users: {
                    type:Array,
                    default: []
                },
            },
        }
</script>
