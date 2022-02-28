<template>
    
<div>

  <b-card
    overlay
    img-src="https://midebien.com/wp-content/uploads/2018/11/la_importancia_de_medir.jpg"
    img-alt="Card Image"
    text-variant="warning"
  >
<br><br>

  <b-form-group class = "animate__animated animate__backInDown" > <!--Este es un formulario-->

   <h1> <b>  Dijite un Numero a Convertir</b></h1>
<br>
   <input  id="num1" v-model.number = "num1" type="number" placeholder="Dijite un Numero" size="sm" />   
   <br><br>

<h4 variant = "warning"> <b> Seleccione Una Unidad </b></h4>

      <!--Este un grupo de opciones-->
    <b-form-select v-model = "conversion" >

      <b-form-select-option  >Que Deseas Convertir</b-form-select-option>

      <b-form-select-option value = "Km a Mts">Kilometros a Metros</b-form-select-option>
      <b-form-select-option  value ="Mts a Km">Metros a Kilometros</b-form-select-option>

      <b-form-select-option value ="Cm a Mts">Centimetros a Metros</b-form-select-option>
      <b-form-select-option  value ="Mts a Cm">Metros a Centimetros</b-form-select-option>

      <b-form-select-option  value ="Mili a Cm">Milimetro a Centimetro</b-form-select-option>
      <b-form-select-option value ="Cm a Mili">Centimetro a Milimetro</b-form-select-option>

    </b-form-select>
    <br><br>
  
      <b-button style="color:white;" variant="warning"  @click="operaciones()" >Convertir</b-button>

  </b-form-group>

  </b-card>

</div>
</template>

<script>

import Swal from 'sweetalert2/dist/sweetalert2.js'

    export default {
      name: 'Operaciones',
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

              if (val  == "Km a Mts") {
               resultado = this.num1 * 1000 + " Metros";
               }

               if (val  == "Mts a Km") {
               resultado = this.num1 / 1000 + " Kilometros";
               }

               if (val  == "Cm a Mts") {
               resultado = this.num1 / 100 + " Metros";
               }

               if (val  == "Mts a Cm") {
               resultado = this.num1 * 100 + " Centimetros";
               }

               if (val  == "Mili a Cm") {
               resultado = this.num1 / 10 + " Centimetros";
               }

               if (val  == "Cm a Mili") {
               resultado = this.num1 * 10 + " Centimetros";
               }

               return  this.$swal ( " La Conversión de " + this.num1 + " " + val   , " Es "+ resultado + "" ,"success" )   
            },
          }
        }
</script>

