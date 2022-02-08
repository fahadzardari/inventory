<template>
<NavBar />
<div class="container mx-auto ">
<ItemList/>

</div>
</template>

<script>
    import NavBar from '@/Components/NavBar.vue'
    import ItemList from '@/Components/ItemsList.vue'
    export default {
            components: {
                NavBar,
                ItemList
            },
        }
</script>
