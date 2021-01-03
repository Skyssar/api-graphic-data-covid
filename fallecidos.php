<?php include ("header.html");?>


<a href = "#" class = "navbar-brand"><h4>FALLECIDOS</h4></a>
      
      </div>
    </nav>

<div class="p-3" align="center" >
<h3> 
Reporte de fallecidos por COVID-19 por municipios en Córdoba 
</h3>
</div>

<!--  GRAPHIC -->
<div id= "texto" align="center" >

</div>

<div class="chartjs-wrapper" >
<canvas id="fallecidos" width="1200" height ="605"></canvas>
</div>

<!--  TABLA DE FALLECIDOS -->
<div class="col-md-5 p-4">

<div class="card">

<div class="card-header">
 <h5  class = "text-center">Fallecidos por municipio</h5>
 </div>

<div class="card-body">

  <table class = "table">

      <thead class="thead-dark">
          <tr>
              <th>Municipio</th>
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
     DatosFallecidos();
}); 


</script>