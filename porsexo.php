<?php include ("header.html");?>

<!--  REPORTE POR SEXOS -->
<a href = "" class = "navbar-brand"><h4>POSITIVOS POR SEXO</h4></a>
      
      </div>
    </nav>

<div class="p-3" align="center" >
<h3> 
Reporte de casos positivos de coronavirus por sexo en Córdoba 
</h3>
</div>


<!--  GRAPHIC  -->
<div id="texto" align="center" >

</div>

<div class="chartjs-wrapper" >

<canvas class="chartjs" id="porsexo" width="800" height ="420"></canvas>
</div>

<!--  TABLA DE POSITIVOS POR SEXO -->
<div class="col-md-5 p-4">

<div class="card">

<div class="card-header">
 <h5  class = "text-center">Casos positivos por sexo en Córdoba</h5>
 </div>

<div class="card-body">

  <table class = "table">

      <thead class="thead-dark">
          <tr>
              <th>Sexo</th>
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

<script type = "text/javascript">

$(document).ready(function(){
    DatosPorSexo();
}); 


</script>