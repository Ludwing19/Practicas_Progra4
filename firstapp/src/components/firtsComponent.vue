<template>

    <div id = "root">
      <input type = "text" placeholder="Escribe texto" v-on:keydown = "key" >
     
            <h4 :style="[styleSpecial]" v-if="keycode >=13 && keycode <= 44">texto: {{keycode}}</h4> 
            <h4 :style="[styleNumero]" v-if="keycode >=47 && keycode <= 58">texto: {{keycode}}</h4> 
            <h4  :style="[style_letras]" v-if="keycode >=64 && keycode <= 91" >texto: {{keycode}}</h4>
            <h4  :style="[styleSpecial]" v-if="keycode >=94 && keycode <= 228" >texto: {{keycode}}</h4>  


<h1  v-on:mousemove="getXY" >{{title}}</h1>
    
        {{x}},{{y}}

    </div>
</template>

<script>

export default {
    name: 'firtsComponent',
    data(){
        return{
              title: 'Mi Primer Componente en NodeJs',
              x:0,
              y:0,
            keycode:' '
        }
    }, 
    methods:{
        getXY(event){
            this.x=event.offsetX;
             this.y=event.offsetY;
             
             },
               key(event){
                 this.keycode = event.keyCode
          }   
    },
     computed:{
              style_letras(){
                  return{
                      color: "green"
                  }
              },
              styleNumero(){
                  return{
                      color: "red"
                  }
              },
               styleSpecial(){
                  return{
                      color: "yellow"
                  }
              }
          } 
    
}
</script>
