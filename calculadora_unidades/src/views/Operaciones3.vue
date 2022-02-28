<template>
    
<div>

  <b-card
    overlay
    img-src = "https://th.bing.com/th/id/R.3327bbf3d7ab91e0c87768246210d431?rik=lXjzAOBVg0ADCQ&riu=http%3a%2f%2fblog.nuestroclima.com%2fwp-content%2fuploads%2f2018%2f11%2fEl-kilo-deja-de-pesar-un-kilo-6.jpg&ehk=udh7qHviZQ60JnunZzF8vaVI0JQKEKnD%2btLYBnrdvmY%3d&risl=&pid=ImgRaw&r=0"
    img-alt="Card Image"
    text-variant=""
  >
<br>
  <b-form-group class = "animate__animated animate__backInLeft"> <!--Este es un formulario-->

   <h1 style="color: rgb(219, 215, 124);"> <b> Dijite una Cantidad a Convertir </b></h1>
<br>
   <input  id="num1" v-model.number = "num1" type="number" placeholder="Dijite una Cantidad" size="sm" />   
   <br><br>

<h3 style="color: rgb(219, 215, 124);"> <b> Seleccione Una Masa </b></h3>

      <!--Este un grupo de opciones-->
    <b-form-select v-model = "conversion" >

      <b-form-select-option >Que Deseas Convertir</b-form-select-option>

      <b-form-select-option value = "Lbr a Kg">Libra a Kilogramo</b-form-select-option>
      <b-form-select-option  value ="Kg a Lbr">Kilogramo a Libra</b-form-select-option>

      <b-form-select-option value ="Grm a Lbr">Gramo a Libra</b-form-select-option>
      <b-form-select-option  value ="Lbr a Grm">Libra a Gramo</b-form-select-option>

      <b-form-select-option  value ="Grm a Mili">Gramo a Miligramo</b-form-select-option>
      <b-form-select-option value ="Mili a Gmr">Miligramo a Gramo</b-form-select-option>

    </b-form-select>
    <br><br>
  
      <b-button style="background-color: rgb(73, 98, 70);"  @click="operaciones()" >Convertir</b-button>

  </b-form-group>

  </b-card>

</div>
</template>

<script>

import Swal from 'sweetalert2/dist/sweetalert2.js'

    export default {
      name: 'Operaciones3',
      data(){

        return{
          // Donde recoge el valor que ingresa el usuer
         num1:0,

         // Muestra el resultado de la operacion
         resultado: 0,

         // Pertenece al listado desplegable segun seleccione el user
         conversion: ' ',

        }

      },

        methods:{
          operaciones() {

              let val = this.conversion;

              let resultado = 0;

              if (val  == "Lbr a Kg") {
               resultado = (Number(this.num1 /  2.2046).toFixed(2) + " Kilogramos");
               };

               if (val  == "Kg a Lbr") {
               resultado = (Number(this.num1 * 2.2046).toFixed(2) + " Libras");
               };

               if (val  == "Grm a Lbr") {
               resultado = (Number(this.num1 / 453.592).toFixed(2) + " Libras");
               };

               if (val  == "Lbr a Grm") {
               resultado = (Number(this.num1 * 453.592).toFixed(2) + " Gramos");
               };

               if (val  == "Grm a Mili") {
               resultado = (Number(this.num1 * 1000).toFixed(2) + " Miligramos");
               };

               if (val  == "Mili a Gmr") {
               resultado = (Number(this.num1 / 1000).toFixed(3) + " Gramos");
               };

                              
               return  this.$swal ( " La Conversión de " + this.num1 + " " + val   , " Es "+ resultado + "" ,"success" )   
            },
          }
        }
</script>