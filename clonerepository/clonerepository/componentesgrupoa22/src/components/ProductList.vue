<template>
    
    <div id = "root">
        <h2>Productos</h2>

    </div>

</template>

<script>
    import products from '../data/products.json'

export default {
    name: 'ProductList',
    data(){
        return{
            items: products
        }
    }
}
</script>

