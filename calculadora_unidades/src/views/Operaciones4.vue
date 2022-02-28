<template>
    
<div>

  <b-card
    overlay
    img-src = "https://i1.wp.com/auralcrave.com/wp-content/uploads/2020/03/twisted-clock.jpg?resize=560%2C400&ssl=1"
    img-alt="Card Image"
    text-variant=""
  >
<br>
  <b-form-group class = "animate__animated animate__flip"> <!--Este es un formulario-->

   <h1 style="color: rgb(232, 255, 245);"> <b> Dijite una Cantidad a Convertir </b></h1>
<br>
   <input  id="num1" v-model.number = "num1" type="number" placeholder="Dijite una Cantidad" size="sm" />   
   <br><br>

<h3 style="color: rgb(232, 255, 245);"> <b> Seleccione Un Tiempo </b></h3>

      <!--Este un grupo de opciones-->
    <b-form-select v-model = "conversion" >

      <b-form-select-option >Que Deseas Convertir</b-form-select-option>

      <b-form-select-option value = "Dia a H">Dia a Hora</b-form-select-option>
      <b-form-select-option  value ="H a Dia">Hora a Dia</b-form-select-option>

      <b-form-select-option value ="H a Min">Hora a Minuto</b-form-select-option>
      <b-form-select-option  value ="Min a H">Minuto a Hora</b-form-select-option>

      <b-form-select-option  value ="Min a Seg">Minuto a Segundo</b-form-select-option>
      <b-form-select-option value ="Seg a Min">Segundo a Minuto</b-form-select-option>

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
      name: 'Operaciones4',
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

              if (val  == "Dia a H") {
               resultado = (Number(this.num1 * 24).toFixed(2) + " Horas");
               };

               if (val  == "H a Dia") {
               resultado = (Number(this.num1 / 24).toFixed(2) + " Dias");
               };

               if (val  == "H a Min") {
               resultado = (Number(this.num1 * 60).toFixed(2) + " Minutos");
               };

               if (val  == "Min a H") {
               resultado = (Number(this.num1 / 60).toFixed(2) + " Horas");
               };

               if (val  == "Min a Seg") {
               resultado = (Number(this.num1 * 60).toFixed(2) + " Segundos");
               };

               if (val  == "Seg a Min") {
               resultado = (Number(this.num1 / 60).toFixed(3) + " Minutos");
               };

                              
               return  this.$swal ( " La Conversión de " + this.num1 + " " + val   , " Es "+ resultado + "" ,"success" )   
            },
          }
        }
</script>