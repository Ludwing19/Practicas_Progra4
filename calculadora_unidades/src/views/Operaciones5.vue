<template>
    
<div>

  <b-card
    overlay
    img-src = "https://almacenamientoit.ituser.es/files/202009/nand-flash-memoria-almacenamiento.jpg"
    img-alt="Card Image"
    text-variant=""
  >
<br>
  <b-form-group class = "animate__animated animate__lightSpeedInRight"> <!--Este es un formulario-->

   <h1 style="color: rgb(249, 140, 1);"> <b> Dijite una Cantidad a Convertir </b></h1>
<br>
   <input  id="num1" v-model.number = "num1" type="number" placeholder="Dijite una Cantidad" size="sm" />   
   <br><br>

<h3 style="color: rgb(249, 140, 1);"> <b> Seleccione Un valor de Almacenamiento </b></h3>

      <!--Este un grupo de opciones-->
    <b-form-select v-model = "conversion" >

      <b-form-select-option >Que Deseas Convertir</b-form-select-option>

      <b-form-select-option  value ="Terabyte a Gigabyte">Terabyte a Gigabyte</b-form-select-option>
      <b-form-select-option value ="Gigabyte a Terabyte">Gigabyte a Terabyte</b-form-select-option>

      <b-form-select-option value = "Gigabyte a Megabyte">Gigabyte a Megabyte</b-form-select-option>
      <b-form-select-option  value ="Megabyte a Gigabyte">Megabyte a Gigabyte</b-form-select-option>

      <b-form-select-option value ="KiloByte a Megabyte">KiloByte a Megabyte</b-form-select-option>
      <b-form-select-option  value ="Megabyte a KiloByte">Megabyte a KiloByte</b-form-select-option>

    </b-form-select>
    <br><br>
  
      <b-button style="background-color: rgb(145, 168, 164"  @click="operaciones()" >Convertir</b-button>

  </b-form-group>

  </b-card>

</div>
</template>

<script>

import Swal from 'sweetalert2/dist/sweetalert2.js'

    export default {
      name: 'Operaciones5',
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

              if (val  == "Terabyte a Gigabyte") {
               resultado = (Number(this.num1 * 1000).toFixed(2) + " Gigabyte");
               };

               if (val  == "Gigabyte a Terabyte") {
               resultado = (Number(this.num1 / 0.001).toFixed(2) + " Terabyte");
               };

               if (val  == "Gigabyte a Megabyte") {
               resultado = (Number(this.num1 * 1000).toFixed(2) + " Megabyte");
               };

               if (val  == "Megabyte a Gigabyte") {
               resultado = (Number(this.num1 / 0.001).toFixed(2) + " Gigabyte");
               };

               if (val  == "KiloByte a Megabyte") {
               resultado = (Number(this.num1 / 0.001).toFixed(2) + " Megabyte");
               };

               if (val  == "Megabyte a KiloByte") {
               resultado = (Number(this.num1 * 1000).toFixed(3) + " KiloByte");
               };

                              
               return  this.$swal ( " La Conversión de " + this.num1 + " " + val   , " Es "+ resultado + "" ,"success" )   
            },
          }
        }
</script>