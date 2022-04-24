<template>

  <div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

<b-card
    overlay
    img-src="https://k17.kn3.net/taringa/2/6/2/5/1/2/0/pctutoriales/13B.jpg?6687"
    img-alt="Card Image"
    text-variant="warning">

<br>
  <b-form-group> <!--Este es un formulario-->

   <h1 class = "animate__animated animate__rubberBand" style="color: rgb(250, 160, 15);"> <b> Calcule Sus Notas </b></h1>
   
   
 <b-row>
    <b-col cols="6" md="4"></b-col>
    <b-col cols="6" md="4">

  <b-input-group class = "animate__animated animate__backInLeft animate__delay-1s">
    
      <b-input-group-text >Inserte la Nota 1</b-input-group-text>
        <b-form-input  id="num1" v-model.number = "N1" type="number" placeholder="Dijite la Nota 1"></b-form-input>
     </b-input-group>

    </b-col>
    <b-col cols="6" md="4"></b-col>
  </b-row>

<!--ddddddddddddddddddddddddddddddddddddddddddddddddddd-->

 <b-row>
    <b-col cols="6" md="4"></b-col>
    <b-col cols="6" md="4">

      <b-input-group class = "animate__animated animate__backInLeft animate__delay-2s">

      <b-input-group-text >Inserte la Nota 2</b-input-group-text>
        <b-form-input  id="num2" v-model.number = "N2" type="number" placeholder="Dijite la Nota 2"></b-form-input>
     </b-input-group>

    </b-col>
    <b-col cols="6" md="4"></b-col>
  </b-row>

<!--ddddddddddddddddddddddddddddddddddddddddddddddddddd-->

   <b-row>
    <b-col cols="6" md="4"></b-col>
    <b-col cols="6" md="4">

      <b-input-group class = "animate__animated animate__backInLeft animate__delay-3s">

      <b-input-group-text >Inserte la Nota 3</b-input-group-text>
        <b-form-input  id="num3" v-model.number = "N3" type="number" placeholder="Dijite la Nota 3"></b-form-input>
     </b-input-group>

    </b-col>
    <b-col cols="6" md="4"></b-col>
  </b-row>

<br>

<h4 class = "animate__animated animate__rubberBand" 
      style="color: rgb(250, 160, 15);"> <b> Seleccione que Desea Saber </b></h4>

      <!--Este un grupo de opciones-->
    <b-form-select v-model = "CalNota" class = "animate__animated animate__backInLeft animate__delay-3s">
      <b-form-select-option style="color: red;">Que Deseas Calcular</b-form-select-option>

      <b-form-select-option value = "Notas de Computo">Calcular Notas de Computo</b-form-select-option>
      <b-form-select-option  value ="Nota Final"> Calcular Los 3 Computos </b-form-select-option>

    </b-form-select>
    <br><br>
  
      <b-button class = "animate__animated animate__backInLeft animate__delay-3s" 
                      style="background-color: rgb(73, 98, 70);"  @click="NotFinal()" >Convertir</b-button>

  </b-form-group>
    
</b-card>

  </div>
</template>

<script>


export default {
  name:'CalcularDatos',
  data(){

        return{
          // Donde recoge el valor que ingresa el usuer
         N1:0,
          N2:0,
           N3:0,

         // Muestra el resultado de la operacion
         resultado: 0,

         // Pertenece al listado desplegable segun seleccione el user
         CalNota: ' ',
        }
      },
        methods:{
          NotFinal() {

              let val = this.CalNota;

              let resultado = 0;

              if (val  == "Notas de Computo") {
               resultado = (Number(this.N1 + this.N2 + this.N3) / 3).toFixed(2) ;
               }

               if (val  == "Nota Final") {
               resultado = (Number(this.N1 + this.N2 + this.N3) / 3).toFixed(2) ;               
               }

              return this.$swal ( " Resultado de "  + val + " Es de "+ resultado, "" ,"success" )
            },
          }
        }
</script>



