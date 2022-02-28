<template>

    <div >
         <b-navbar  type = "dark"  variant = "dark">

             <b-navbar-nav >

                  <b-nav-item to = "/" > Convertir Unidades</b-nav-item>
                <b-nav-item to = "/Operaciones2"> Convertir Monedas</b-nav-item>
                <b-nav-item to = "/Operaciones3"> Convertir Masa</b-nav-item>
                <b-nav-item to = "/Operaciones4"> Convertir Tiempo</b-nav-item>
                <b-nav-item to = "/Operaciones5"> Convertir Almacenamiento</b-nav-item>


            </b-navbar-nav>
        </b-navbar>
    <router-view/>

    </div>

</template>

<script>
export default {
    name: 'Navegar'
}
</script>