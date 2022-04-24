<template>
    <div>
         <b-navbar   style="background-Color: rgb(1, 22, 56);">
             <b-navbar variant="faded" type="light">
                 <b-img center src="https://th.bing.com/th/id/R.05b33867df72382d3f33d2dd4b0c06d1?rik=rTUcTICPZowfQQ&riu=http%3a%2f%2fwww.esmioriente.com%2finicio%2fwp-content%2fuploads%2f2016%2f01%2flogo-barrios-peque.jpg&ehk=4QMIXVvnHrrsQVuB3fqZ4hNjHA4v3BNnQ%2fjgFQbQdb8%3d&risl=&pid=ImgRaw&r=0" style="width:60px; height:60px;"  rounded alt="Rounded image" ></b-img>
                    </b-navbar>
                 <b-navbar-nav >
         <b-nav-item to = "/"> <h5  style="color:white;"> <b>Bienvenidos </b> </h5></b-nav-item>
        <b-nav-item to = "/Quienes_Somos"> <h5 style="color:white;"> <b> Quienes Somos </b> </h5></b-nav-item>
                <b-nav-item to = "/CalcularDatos"> <h5 style="color:white;"> <b> Calcular Datos </b> </h5></b-nav-item>
     </b-navbar-nav>
</b-navbar>        
<router-view/>

    </div>
</template>


<script>

export default {
    name: 'CambiarVista',

}
</script>