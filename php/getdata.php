<?php //archivo que obtiene los datos de 'datos.gov.co'

$headers = array(
'Accept: application/json',
'Content-type: application/json',
"X-App-Token: " . 'BfruTHzSWDHAC0aMYO19l3dP6'
);
$cliente =
curl_init("https://www.datos.gov.co/resource/gt2j-8ykr.json?departamento=C%C3%B3rdoba&\$limit=50000");
curl_setopt($cliente, CURLOPT_HTTPHEADER, $headers);
curl_setopt($cliente, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($cliente);

include 'llenardb.php'; //llamamos al archivo que guarda los datos en la bd

if ($result == false){
    echo "La base de datos datos_covid no existe ";
} else{

echo "Total de Registros Guardados: ".count(json_decode($response, true)); //se muestra el total de registros guardados en db
}

?>