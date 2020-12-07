<?php // archivo que guarda los métodos PHP que realizan las peticiones SQL


class Information {
     
    public function ObtenerPositivos (){

        include "db.php";

        $query = "SELECT COUNT(E.ciudad_de_ubicaci_n) as Positivos, E.ciudad_de_ubicaci_n
        FROM data_cordoba AS E 
        GROUP BY E.ciudad_de_ubicaci_n
        ORDER BY Positivos DESC";

        $result = mysqli_query($conexion, $query);

        $consulta = mysqli_fetch_all($result, MYSQLI_ASSOC);
       
            return $consulta; 

    }

    public function ObtenerRecuperados (){

        include "db.php";
       
       $query = "SELECT COUNT(E.ciudad_de_ubicaci_n) as Recuperados, E.ciudad_de_ubicaci_n
       FROM data_cordoba AS E 
       WHERE E.atenci_n='Recuperado'
       GROUP BY E.ciudad_de_ubicaci_n
       ORDER BY Recuperados DESC";
        $result = mysqli_query($conexion, $query);

       $consulta = mysqli_fetch_all ($result, MYSQLI_ASSOC);
      
        
       return $consulta; 


    }

    public function ObtenerFallecidos (){

        include "db.php";
       
       $query = "SELECT COUNT(E.ciudad_de_ubicaci_n) as Fallecidos, E.ciudad_de_ubicaci_n
       FROM data_cordoba AS E 
       WHERE E.atenci_n='Fallecido'
       GROUP BY E.ciudad_de_ubicaci_n
       ORDER BY Fallecidos DESC";
        $result = mysqli_query($conexion, $query);

       $consulta = mysqli_fetch_all ($result, MYSQLI_ASSOC);
               
       return $consulta; 


    }

    public function ObtenerPorSexo (){

        include "db.php";
       
       $query = "SELECT COUNT(E.sexo) as Positivos, E.sexo
       FROM data_cordoba AS E 
       GROUP BY E.sexo";
        $result = mysqli_query($conexion, $query);

       $consulta = mysqli_fetch_all ($result, MYSQLI_ASSOC);
               
       return $consulta; 


    }

    public function ObtenerPorEdades (){

        include "db.php";
       
       $query = "SELECT E.atenci_n, 
       SUM(CASE WHEN E.edad BETWEEN 0 and 9 THEN 1 ELSE 0
       end) AS Edad0a9,
       SUM(case WHEN E.edad between 10 and 19 THEN 1 else 0
       end) AS Edad10a19,
       SUM(case WHEN E.edad between 20 and 29 THEN 1 else 0
       end) AS Edad20a29,
       SUM(case WHEN E.edad between 30 and 39 THEN 1 else 0
       end) AS Edad30a39,
       SUM(case WHEN E.edad between 40 and 49 THEN 1 else 0
       end) AS Edad40a49,
       SUM(case WHEN E.edad between 50 and 59 THEN 1 else 0
       end) AS Edad50a59,
       SUM(case WHEN E.edad between 60 and 69 THEN 1 else 0
       end) AS Edad60a69,
       SUM(case WHEN E.edad between 70 and 200 THEN 1 else 0
       end) AS Edad70mas
       FROM data_cordoba AS E
       GROUP BY E.atenci_n
UNION
       SELECT E.atenci_n = 'TOTAL',        
       SUM(CASE WHEN E.edad BETWEEN 0 and 9 THEN 1 ELSE 0
       end) AS Edad0a9,
       SUM(case WHEN E.edad between 10 and 19 THEN 1 else 0
       end) AS Edad10a19,
       SUM(case WHEN E.edad between 20 and 29 THEN 1 else 0
       end) AS Edad20a29,
       SUM(case WHEN E.edad between 30 and 39 THEN 1 else 0
       end) AS Edad30a39,
       SUM(case WHEN E.edad between 40 and 49 THEN 1 else 0
       end) AS Edad40a49,
       SUM(case WHEN E.edad between 50 and 59 THEN 1 else 0
       end) AS Edad50a59,
       SUM(case WHEN E.edad between 60 and 69 THEN 1 else 0
       end) AS Edad60a69,
       SUM(case WHEN E.edad between 70 and 200 THEN 1 else 0
       end) AS Edad70mas
       FROM data_cordoba AS E"; 

        $result = mysqli_query($conexion, $query);

       $consulta = mysqli_fetch_all ($result, MYSQLI_ASSOC);
               
       return $consulta; 


    }

    public function ObtenerReporte (){

        include "db.php";
    $query = "SELECT E.atenci_n, COUNT(E.atenci_n) AS numero
       FROM data_cordoba AS E
       GROUP BY E.atenci_n
    UNION
       SELECT E.atenci_n = 'TOTAL', COUNT(*)
       FROM data_cordoba AS E";

    $result = mysqli_query($conexion, $query);

    $consulta = mysqli_fetch_all ($result, MYSQLI_ASSOC);
        
    return $consulta; 

}   

// Función para buscar el total de los casos
    public function AllCasos ($busqueda){

        include "db.php";

        if ($busqueda == "positivos"){

            $query = "SELECT COUNT(*) AS numero
            FROM data_cordoba AS E";
     
        } 
        if ($busqueda == "recuperados"){

            $query = "SELECT COUNT(E.atenci_n) AS numero
            FROM data_cordoba AS E
            WHERE E.atenci_n = 'Recuperado'";

        }       
        if ($busqueda == "fallecidos"){

            $query = "SELECT COUNT(E.atenci_n) AS numero
            FROM data_cordoba AS E
            WHERE E.atenci_n = 'Fallecido'";

        }

    $result = mysqli_query($conexion, $query);

    $consulta = mysqli_fetch_assoc($result);
        
    return $consulta; 

}


}



?>


