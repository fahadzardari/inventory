<template>
<NavBar />
<div class="grid grid-cols-4 md:grid-cols-3 sm:grid-cols-1 container mx-auto ">
<ItemCard :source_img="`https://picsum.photos/id/234/200`" :name="`item1`" />
<ItemCard :source_img="`https://picsum.photos/id/235/200`" :name="`item1`" />
<ItemCard :source_img="`https://picsum.photos/id/236/200`" :name="`item1`" />



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
        }
</script>
