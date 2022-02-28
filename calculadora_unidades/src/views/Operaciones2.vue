<template>
    
<div>

  <b-card
    overlay
    img-src = "https://s03.s3c.es/imag/_v0/770x420/1/e/0/700x420_sicavs-770.jpg"
    img-alt="Card Image"
    text-variant=""
  >
<br>
  <b-form-group class = "animate__animated animate__backInUp"> <!--Este es un formulario-->

   <h1 style="color: rgb(205, 221, 221);"> <b> Dijite una Cantidad a Convertir </b></h1>
   
<br>
   <input  id="num1" v-model.number = "num1" type="number" placeholder="Dijite una Cantidad" size="sm" />   
   <br><br>

<h4 style="color: rgb(205, 221, 221);"> <b> Seleccione Una Moneda </b></h4>

      <!--Este un grupo de opciones-->
    <b-form-select v-model = "conversion" >
      <b-form-select-option >Que Deseas Convertir</b-form-select-option>

      <b-form-select-option value = "USD a PsM">Dolar a Peso Mexicano</b-form-select-option>
      <b-form-select-option  value ="PsM a USD">Peso Mexicano a Dolar</b-form-select-option>

      <b-form-select-option value ="Eu a USD">Euro a Dolar</b-form-select-option>
      <b-form-select-option  value ="USD a Eu">Dolar a Euro</b-form-select-option>

      <b-form-select-option  value ="UDS a Yuan">Dolar a Yuan Chino</b-form-select-option>
      <b-form-select-option value ="Yuan a USD">Yuan Chino a Dolar</b-form-select-option>

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
      name: 'Operaciones2',
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

              if (val  == "USD a PsM") {
               resultado = this.num1 * 20.48 + " Pesos Mexicanos";
               };

               if (val  == "PsM a USD") {
               resultado = (Number(this.num1 * 0.049).toFixed(2) + " Dolares");
               };

               if (val  == "Eu a USD") {
               resultado = (Number(this.num1 * 1.12).toFixed(2) + " Dolares");
               };

               if (val  == "USD a Eu") {
               resultado = (Number(this.num1 * 0.89).toFixed(2) + " Euros");
               };

               if (val  == "UDS a Yuan") {
               resultado = (Number(this.num1 * 6.31).toFixed(2) + " Yuan Chino");
               };

               if (val  == "Yuan a USD") {
               resultado = (Number(this.num1 * 0.16).toFixed(2) + " Dolares");
               };

                              
               return  this.$swal ( " La Conversión de " + this.num1 + " " + val   , " Es "+ resultado + "" ,"success" )   
            },
          }
        }
</script>

