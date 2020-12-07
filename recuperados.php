<?php include ("header.html");?>

<!--  RECUPERADOS-->
<a href = "" class = "navbar-brand"><h4>RECUPERADOS</h4></a>
      
      </div>
    </nav>

<div class="p-3" align="center" >
<h3> 
Reporte de recuperados de COVID-19 por municipios en Córdoba 
</h3>
</div>

   
<!--  GRAPHIC  -->


<div id="texto" align="center" >

</div>

<div class="chartjs-wrapper" >
<canvas id="recuperados" width="1200" height ="605"></canvas>
</div>

<!--  TABLA DE RECUPERADOS  -->
<div class="col-md-5 p-4">

<div class="card">

<div class="card-header">
 <h5  class = "text-center">Recuperados por municipio</h5>
 </div>

<div class="card-body">

  <table class = "table">

      <thead class="thead-dark">
          <tr>
              <th>Municipio</th>
              <th>Recuperados</th>

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
    DatosRecuperados();
}); 


</script>