<template>
<div>

    <HeaderTitle title="Este texto se comparte con headertitle"/>
 
  <h2> Este pertenece a Nuevo</h2>

  <div class="mb-2">
    <b-avatar src="https://placekitten.com/300/300" size="6rem"></b-avatar>
  </div>

</div>
  
</template>
<script>
import HeaderTitle from '../components/HeaderTitle.vue'
export default {
    name: 'NuevoViews',
    components:{
        HeaderTitle
    }
}
</script>