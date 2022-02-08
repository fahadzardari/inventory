<template>
    <div class="container mx-auto items-center justify-center flex rounded-md mt-4">
                <table class="shadow-lg bg-white w-full text-center">
                <thead >
                    <tr >
                        <th class="bg-slate-800 text-white border  px-8 py-4">Id</th>
                        <th class="bg-slate-800 text-white border  px-8 py-4">Item</th>
                        <th class="bg-slate-800 text-white border  px-8 py-4">Quantity</th>
                        <th class="bg-slate-800 text-white border  px-8 py-4">Date Added</th>
                        <th class="bg-slate-800 text-white border  px-8 py-4">Actions</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border px-8 py-4">1</td>
                        <td class="border px-8 py-4">Table</td>
                        <td class="border px-8 py-4">45</td>
                        <td class="border px-8 py-4">2015-01-01</td>
                        <td class="border px-8 py-4">
                            <button class="bg-black text-white font-bold mx-2 p-2 rounded-md shadow-md"> Edit</button>
                            <button class="bg-red-800 text-white font-bold p-2 rounded-md shadow-md"   > Delete</button>                           
                        </td>

                    </tr>
                </tbody>
                </table>        
    </div>
</template>

<script>
    export default {
        
    }
</script>

<style lang="scss" scoped>

</style>