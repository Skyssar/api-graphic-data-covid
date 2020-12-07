<?php // archivo que, llamado desde getdata.php, guarda los datos de 'datos.gov.co' en la db datos_covid.sql
      // para crear la tabla con todas las columnas en mysql, importa el archivo datos_covid.sql

include 'db.php';

$data = json_decode($response, true);

foreach($data as $row){

$id_de_caso = $row['id_de_caso'];
$fecha_de_notificaci_n = $row['fecha_de_notificaci_n'];
$c_digo_divipola = $row['c_digo_divipola'];
$ciudad_de_ubicaci_n = $row['ciudad_de_ubicaci_n'];
$departamento = $row['departamento'];
$atenci_n = $row['atenci_n'];
$edad = $row['edad'];
$sexo = $row['sexo'];
$tipo = $row['tipo'];
$estado = $row['estado'];
$pa_s_de_procedencia = $row['pa_s_de_procedencia'];
$fis = $row['fis'];
$fecha_de_muerte = $row['fecha_de_muerte'];
$fecha_diagnostico = $row['fecha_diagnostico'];
$fecha_recuperado = $row['fecha_recuperado'];
$fecha_reporte_web = $row['fecha_reporte_web'];
$tipo_recuperaci_n = $row['tipo_recuperaci_n'];
$codigo_departamento = $row['codigo_departamento'];
$codigo_pais = $row['codigo_pais'];
$pertenencia_etnica = $row['pertenencia_etnica'];
$nombre_grupo_etnico = $row['nombre_grupo_etnico'];
$ubicaci_n_recuperado = $row['ubicaci_n_recuperado'];

$query = "INSERT INTO data_cordoba(id_de_caso, fecha_de_notificaci_n, c_digo_divipola, ciudad_de_ubicaci_n, departamento, atenci_n, edad, sexo, tipo, estado, pa_s_de_procedencia,
fis, fecha_de_muerte, fecha_diagnostico, fecha_recuperado, fecha_reporte_web, tipo_recuperaci_n, codigo_departamento, codigo_pais, pertenencia_etnica, nombre_grupo_etnico, ubicaci_n_recuperado) 
        VALUES ('$id_de_caso', '$fecha_de_notificaci_n', '$c_digo_divipola', '$ciudad_de_ubicaci_n', '$departamento', '$atenci_n', '$edad', '$sexo', '$tipo', '$estado', '$pa_s_de_procedencia',
'$fis', '$fecha_de_muerte', '$fecha_diagnostico', '$fecha_recuperado', '$fecha_reporte_web', '$tipo_recuperaci_n', '$codigo_departamento', '$codigo_pais', '$pertenencia_etnica', '$nombre_grupo_etnico', '$ubicaci_n_recuperado')";

$result = mysqli_query($conexion, $query);

}

?>