<?php include ("header.html");?>


<a href = "" class = "navbar-brand"><h4>REPORTE POR EDADES</h4></a>
      
      </div>
    </nav>

<div class="p-3" align="center" >
<h3> 
Reporte por edades de COVID-19 en Córdoba 
</h3>
</div>

<!--  GRAPHIC  -->
<div id="texto" align="center" >

</div>
   
<div class="chartjs-wrapper" >
<canvas id="reportedades" width="1000" height ="450"></canvas>
</div>

<!--  TABLA DE POSITIVOS POR EDADES -->
<div class="col-md-5 p-4">

<div class="card">

<div class="card-header">
 <h5  class = "text-center">Reporte por edades Córdoba</h5>
 </div>

<div class="card-body">

  <table class = "table">

      <thead class="thead-dark">
          <tr>
              <th>Edad</th>
              <th>Positivos</th>
              <th>Recuperados</th>
              <th>Fallecidos</th>

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

<script type = "text/javascript">

$(document).ready(function(){
    DatosPorEdades();
}); 


</script>