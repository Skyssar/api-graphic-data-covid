<?php // archivo api/index.php donde se realizan las peticiones a los endpoints de la api
      // 'api' es la dirección asignada en el Alias /api "C:/xampp/htdocs/projects/apidatos/api/" del archivo httpd-xampp.conf


require '../php/modelo.php';
        
    $info = new Information();

    switch ($_SERVER['REQUEST_URI']){

        case '/api/positivos': // endpoint para los positivos
           
            $respuesta = $info->ObtenerPositivos(); 
            echo json_encode ($respuesta);
        
        break; 

        case '/api/recuperados': // los recuperados
           
            $respuesta = $info->ObtenerRecuperados();
            echo json_encode ($respuesta);
        
        break; 

        case '/api/fallecidos': //fallecidos
           
            $respuesta = $info->ObtenerFallecidos();
            echo json_encode ($respuesta);
        
        break; 

        case '/api/porsexo': // por sexo
           
            $respuesta = $info->ObtenerPorSexo();
            echo json_encode ($respuesta);
        
        break; 

        case '/api/reportages': // reporte por edades
           
            $respuesta = $info->ObtenerPorEdades();
            echo json_encode ($respuesta);
        
        break; 

        case '/api/reporte': // index
           
            $respuesta = $info->ObtenerReporte();
            echo json_encode ($respuesta);
        
        break; 

        case '/api/totales': //totales
           
            $busqueda = $_POST["busqueda"];
            
            $respuesta = $info->AllCasos($busqueda);
            echo json_encode ($respuesta);
        
        break; 

        default:

        echo "Oops! No se puede encontrar esta página. REVISA LA URL COMPA.";



    }

// CREATED BY Yasar Cure
        //    Marco Tulio

?>