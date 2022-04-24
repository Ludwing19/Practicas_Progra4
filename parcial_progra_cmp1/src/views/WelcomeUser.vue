<template >

        <div Class = "Primero" style="backgroundColor: rgb(1, 22, 56);">

          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

          <div Class = "Segundo" style="backgroundColor: rgb(150, 2, 0);">
             <br>
             <h1 class="animate__animated animate__backInLeft "
                    style="color: rgb(255, 255, 255); ">Universidad General Gerardo Barrios</h1>
             <br>
          </div>  
<br>
    <div>
       <b-container>
          <div>
              <b-button v-b-toggle = "'collapse-1'" class="m-1 animate__animated animate__shakeY"  style="background-color: rgb(243, 167, 18);" > 🎯 MISIÓN</b-button>
               <b-collapse id="collapse-1">
                 <b-card>
                    <p>
                     <b> MISIÓN </b> 
          Somos la universidad que gestiona el conocimiento por nuestra contribución con el desarrollo científico, 
          económico y social de El Salvador, enfocada a satisfacer las necesidades de estudiantes, comunidades, profesionales y empresas, 
          mediante la docencia, investigación y proyección social.
                    </p>
                 </b-card>
             </b-collapse>

            <b-button v-b-toggle = "'collapse-2'" class="m-1 animate__animated animate__shakeY" style="background-color: rgb(243, 167, 18);" >🚀 VISIÓN</b-button>
             <b-collapse id="collapse-2">
                <b-card>
                  <p>
                  <b> VISIÓN </b> 
              Ser una universidad referente a nivel Nacional e Internacional por su contribución al desarrollo científico, económico y social de El Salvador.        
                </p>
            </b-card>
         </b-collapse>

            <b-button v-b-toggle = "'collapse-3'" class="m-1 animate__animated animate__shakeY" style="background-color: rgb(243, 167, 18);" >🎓 VALORES</b-button>
              <b-collapse id="collapse-3">
                <b-card>
                   <b> Valores Institucionales </b> 
                 <p style = "text-align: justify">
                  ✅Integridad: Actuamos con el compromiso de cumplir con nuestras promesas, comunicando claramente nuestra realidad de forma veraz, distinguiendo claramente las proyecciones de futuro. <br>
                  ✅Confianza: Tenemos fe en las demás personas porque sabemos que compartimos los mismos intereses, permitiéndonos la seguridad y la tranquilidad que avanzamos hacia el mismo objetivo. <br>
                  ✅Respeto: Reconocemos la soberanía que tienen las demás personas de ser diferentes y valoramos esas diferencias aceptando que podemos aprender de ellas en todo momento. <br>
                  ✅Innovación: Ideamos soluciones nuevas y diferentes para resolver problemas o situaciones que se nos presenten y que nos permitan anticiparnos a las necesidades y exigencias de la sociedad. <br>
                </p>
             </b-card>
         </b-collapse>
     </div>
<br>
<div>
  <b-card class="text-center">
    <div class="bg-secondary text-light">
      <h4>Sistema de Gestión de la Calidad</h4>
      <b>Política de la Calidad</b><br>

<p style = "text-align: justify">
 La Universidad Gerardo Barrios es una institución salvadoreña de educación superior 
dedicada a la gestión del conocimiento, comprometida con el cumplimiento de los requisitos 
legales aplicables a la institución y la revisión de los objetivos, así como con la mejora continua 
a fin de satisfacer a nuestros usuarios.
</p>

<br>

<h4>Objetivos de la Calidad</h4>
<p style = "text-align: justify">
🟢Posicionar a la UGB como una institución de educación superior, líder en la gestión del conocimiento y excelencia. <br>
🟢 Cumplir con los requisitos legales y los objetivos institucionales. <br>
🟢 Mejorar continuamente la administración global de la universidad. <br>
🟢 Aumentar la satisfacción de nuestros usuarios. <br>
</p >
<br>
    </div>
  </b-card>
</div>
<br>
     
  </b-container>
</div>

  </div>

</template>


<script>

export default {
    name:'WelcomeUser',
}
</script>
