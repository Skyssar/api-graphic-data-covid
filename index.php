<?php include ("header.html");?>

<!--  INDEX API -->
<a href = "https://cintia.unicordoba.edu.co/user/profile.php?id=4042" target="_blank" class = "navbar-brand">BY: YasarJ and MarcoA</a>
      
      </div>
    </nav>

<!--  TITULO BRO  -->
<div class="p-3" align="center" >
<h2> 
Bienvenido a la API de reporte de casos de COVID-19 en Córdoba 
</h2>
</div>

<?php $fcha = date("d-M-y"); // LA FECHA ACTUAL?> 

<!--  GRAPHIC  -->
<div id="texto" align="center" >
<h5> 
Casos confirmados <?php echo $fcha;?>
</h5>
</div>

<div class="chartjs-wrapper" >
<canvas id="reporte" width="800" height ="420"></canvas>
</div>


<?php include ("footer.html");?>

<script type = "text/javascript">

$(document).ready(function(){
   GraficoReporte();
}); 


</script>