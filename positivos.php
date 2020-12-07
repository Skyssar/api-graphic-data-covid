<?php include ("header.html");?>

<!--  POSITIVOS COVID19 -->
<a href = "" class = "navbar-brand"><h4>POSITIVOS</h4></a>
      
      </div>
    </nav>

<!--  TITULO BRO  -->
<div class="p-3" align="center" >
<h3> 
Reporte de casos positivos de COVID-19 por municipios en Córdoba 
</h3>
</div>

<!--  GRAPHIC  -->
<div id = "texto" align="center" >
<!--  se reemplaza por un texto del JavaScript the_graphic.js  -->
</div>

<div class="chartjs-wrapper" >
<canvas id="positivos" width="1200" height ="605"></canvas>
</div>

<!--  TABLA DE POSITIVOS  -->
<div class="col-md-5 p-4">

<div class="card">

<div class="card-header">
 <h5  class = "text-center">Casos por municipio</h5>
 </div>

<div class="card-body">

  <table class = "table">

      <thead class="thead-dark">
          <tr>
              <th>Municipio</th>
              <th>Positivos</th>

          </tr>
      </thead>
      <tbody id = "datos">

      </tbody>
  </table>

  </div>
</div>
</div>

<div class = "text-right">
<p><small>Fuente: datos.gov.co &nbsp;</small></p>
</div>

<?php include ("footer.html");?>

<!--  SCRIPT para cargar la función antes de que cargue la página -->
<script type = "text/javascript">

$(document).ready(function(){
    DatosPositivos();
}); 


</script>