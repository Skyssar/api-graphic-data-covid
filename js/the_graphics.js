//JAVASCRIPT CON TODAS LAS FUNCIONES PARA LOS GRÁFICOS CHART JS Y TABLAS

// -----------------------------------------------------------------------------------------
// Función para los positivos por municipio, ordenados de más a menos casos
function DatosPositivos(){

    $.ajax({

        url: 'http://localhost/api/positivos',
        type: 'GET',
        dataType: 'json'
     
    }).done(function(response){

        GraficoPositivos (response); // llama a la función que grafica los datos

    }).fail(function(response){
         
        console.log(response);
    });
}

//Esta funcion realiza la tabla y el gráfico de los positivos 
function GraficoPositivos (response){

    var municipios = [];
    var casos = [];
    var html = "";
  
    $.each(response, function (i, data){

        municipios.push (data.ciudad_de_ubicaci_n);
        casos.push (data.Positivos);

        html += "<tr>";
        html += "<td>" + data.ciudad_de_ubicaci_n + "</td>";
        html += "<td>" + data.Positivos + "</td>";
        html += "</td>";
        html += "</tr>"

     });
    
    DatosTotales("positivos", html); // llamo a la función que me devuelve el total de positivos
    console.log(response); 
    
    //llamo a la función que hace el gráfico 
    Grafico (municipios, casos, 'positivos', 'Contagiados',  'rgba(226, 3, 37, 0.2)', 'rgba(226, 3, 37, 1)');
}
//-----------------------------------------------------------------------------------------------------

// Aquí los RECUPERADOS
function DatosRecuperados(){

    $.ajax({

        url: 'http://localhost/api/recuperados',
        type: 'GET',
        dataType: 'json'
     

    }).done(function(response){

        GraficoRecuperados (response); // llama a la función que grafica los datos

    }).fail(function(response){
         
        console.log(response);
    });
}

//Esta funcion realiza la tabla y el gráfico de los recuperados
function GraficoRecuperados (response){
 
    var municipios = [];
    var casos = [];
    var html = "";
  
    $.each(response, function (i, data){
 
        municipios.push (data.ciudad_de_ubicaci_n);
        casos.push (data.Recuperados);

        html += "<tr>";
        html += "<td>" + data.ciudad_de_ubicaci_n + "</td>";
        html += "<td>" + data.Recuperados + "</td>";
        html += "</td>";
        html += "</tr>"

     });


     DatosTotales("recuperados", html); // llamo a la función que me devuelve el total de r
    console.log(response); 

    //llamo a la función que hace el gráfico 
    Grafico (municipios, casos, 'recuperados', 'Recuperados',  'rgba(30, 149, 8, 0.2)', 'rgba(30, 149, 8, 1)');

}

//------------------------------------------------------------------------------------------

// Aquí los FALLECIDOS
function DatosFallecidos(){

    $.ajax({

        url: 'http://localhost/api/fallecidos',
        type: 'GET',
        dataType: 'json'
     

    }).done(function(response){

        GraficoFallecidos (response); // llama a la función que grafica los datos

    }).fail(function(response){
         
        console.log(response);
    });
}

//Esta funcion realiza la tabla y el gráfico de los fallecidos
function GraficoFallecidos (response){
 
    var municipios = [];
    var casos = [];
    var html = "";
  
    $.each(response, function (i, data){
 
        municipios.push (data.ciudad_de_ubicaci_n);
        casos.push (data.Fallecidos);

        html += "<tr>";
        html += "<td>" + data.ciudad_de_ubicaci_n + "</td>";
        html += "<td>" + data.Fallecidos + "</td>";
        html += "</td>";
        html += "</tr>"

     });

     DatosTotales("fallecidos", html); // llamo a la función que me devuelve el total de f
     console.log(response); 

    //llamo a la función que hace el gráfico 
    Grafico (municipios, casos, 'fallecidos', 'Fallecidos', 'rgba(73, 62, 120, 0.2)', 'rgba(73, 62, 120, 1)');
    
}

//---------------------------------------------------------------------------

//Reporte por Sexos
function DatosPorSexo(){

    $.ajax({

        url: 'http://localhost/api/porsexo',
        type: 'GET',
        dataType: 'json'
     

    }).done(function(response){

        GraficoPorSexo (response); // llama a la función que grafica los datos

    }).fail(function(response){
         
        console.log(response);
    });
}

//Graphic and table
function GraficoPorSexo (response){

    var sexo = []; 
    var casos = [];
    var html = "";
    
 
    $.each(response, function (index, data){

        sexo.push (data.sexo);
        casos.push (data.Positivos); 

        // este código llena la tabla
        html += "<tr>";
        html += "<td>" + data.sexo + "</td>";
        html += "<td>" + data.Positivos + "</td>";
        html += "</td>";
        html += "</tr>"

     });

     DatosTotales("positivos", html);
     console.log(response);

    //Gráfico de torta para positivos por sexo
    var ctx = document.getElementById('porsexo');
    var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: sexo,
        datasets: [{
            label: 'Positivos por sexo', 
            data: casos,
            backgroundColor: [
                'rgb(255, 51, 240)',
                'rgba(41, 74, 222)',
            ],
            borderColor: [
                'rgb(0,0,0)',
                'rgb(0,0,0)',
            ],
            borderWidth: 1,
            hoverBackgroundColor: [
                'rgb(227, 134, 201)',
                'rgba(134, 170, 227)',
            ]
        }]
    },
    options: {       
        maintainAspectRatio: false,
    }
});

}

//---------------------------------------------------------------------------
//Este es por edades :)
function DatosPorEdades(){

    $.ajax({

        url: 'http://localhost/api/reportages',
        type: 'GET',
        dataType: 'json'
     

    }).done(function(response){

        GraficoPorEdades (response); // llama a la función que grafica los datos

    }).fail(function(response){
         
        console.log(response);
    });
}

//Graphic and table
function GraficoPorEdades (response){

    const edades  = ["0-9 años","10-19 años", "20-29 años", "30-39 años", "40-49 años", "50-59 años", "60-69 años", "70+ años"];
    var Fallecidos = [];
    var Recuperados= [];
    var Positivos = []; 
    var html = "";

    $.each(response, function (index, data){

        if (data.atenci_n == "Fallecido"){
         Fallecidos.push (data.Edad0a9, data.Edad10a19, data.Edad20a29, data.Edad30a39, data.Edad40a49, data.Edad50a59, data.Edad60a69, data.Edad70mas);
        }
        if (data.atenci_n == "Recuperado"){
            Recuperados.push (data.Edad0a9, data.Edad10a19, data.Edad20a29, data.Edad30a39, data.Edad40a49, data.Edad50a59, data.Edad60a69, data.Edad70mas);
           }
        if (data.atenci_n == "0"){
            Positivos.push (data.Edad0a9, data.Edad10a19, data.Edad20a29, data.Edad30a39, data.Edad40a49, data.Edad50a59, data.Edad60a69, data.Edad70mas);
           }
        });

        for (var i =0; i< 8; i++){ //este for recorre el arreglo edades predeterminado para graficar
        
        html += "<tr>";
        html += "<td>" + edades[i] + "</td>";
        html += "<td>" + Positivos[i] + "</td>";
        html += "<td>" + Recuperados[i] + "</td>";
        html += "<td>" + Fallecidos[i] + "</td>";
        html += "</td>";
        html += "</tr>"
    }

    ReporteData(html);
    console.log(response);

//Para qué hacerlo en una función distinta, si se puede hacer aquí mismo xD
    var ctx = document.getElementById('reportedades');
    var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: edades,
        datasets: [{
            label: 'Positivos', 
            data: Positivos,
            backgroundColor: [
                'rgba(30, 149, 8, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.4)',
                'rgba(226, 3, 37, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(149, 140, 8, 0.2)',
                'rgba(59, 15, 235, 0.4)'

            ],
            borderColor: [
                'rgba(30, 149, 8, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(226, 3, 37, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(149, 140, 8, 1)',
                'rgba(59, 15, 235, 1)'

            ],
            borderWidth: 1
        }, 
        {label: 'Recuperados', 
        data: Recuperados,
        backgroundColor: [
            'rgba(30, 149, 8, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.4)',
            'rgba(226, 3, 37, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(255, 159, 64, 0.2)',
            'rgba(149, 140, 8, 0.2)',
            'rgba(59, 15, 235, 0.4)'

        ],
        borderColor: [
            'rgba(30, 149, 8, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(226, 3, 37, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)',
            'rgba(149, 140, 8, 1)',
            'rgba(59, 15, 235, 1)'

        ],
        borderWidth: 1
    },
    {label: 'Fallecidos', 
    data: Fallecidos,
    backgroundColor: [
        'rgba(30, 149, 8, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.4)',
        'rgba(226, 3, 37, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)',
        'rgba(149, 140, 8, 0.2)',
        'rgba(59, 15, 235, 0.4)'

    ],
    borderColor: [
        'rgba(30, 149, 8, 1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(226, 3, 37, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)',
        'rgba(149, 140, 8, 1)',
        'rgba(59, 15, 235, 1)'

    ],
    borderWidth: 1
} ]},
    options: {
        maintainAspectRatio: false,
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

}

// ------------------------------------------------------------

//Función que me grafica los datos de POSITIVOS - RECUPERADOS - FALLECIDOS
function Grafico (municipios, casos, element, etiqueta, colorinicial, bginicial){
    
    var colors = [];
    var bgcolors = [];
    for (i=0; i<4; i++){

        colors.push(colorinicial,
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.4)',
        'rgba(226, 3, 37, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)',
        'rgba(149, 140, 8, 0.2)',
        'rgba(59, 15, 235, 0.4)',
        'rgba(30, 149, 8, 0.2)',
        'rgba(54, 162, 235, 0.2)');

    }

    for (i=0; i<4; i++){
        bgcolors.push(
        bginicial,
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(226, 3, 37, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)',
        'rgba(149, 140, 8, 1)',
        'rgba(59, 15, 235, 1)',
        'rgba(30, 149, 8, 1)',
        'rgba(54, 162, 235, 1)');
    }


    var ctx = document.getElementById(element);
    var myChart = new Chart(ctx, {
    type: 'horizontalBar',
    data: {
        labels: municipios,
        datasets: [{
            label: etiqueta,
            data: casos,
            backgroundColor: colors,
            borderColor: bgcolors,
            borderWidth: 1
        }]
    },
    options: {  maintainAspectRatio: false,
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

}

//---------------------------------------------------------------------------
// FUNCIONES ADICIONALES 


// funcion que trae los datos totales de POSIT-RECUP-FALLEC de la db
function DatosTotales(busqueda, html){

    $.ajax({

        url: 'http://localhost/api/totales',
        type: 'POST',
        data: {"busqueda" : busqueda},
        dataType: 'json'
     

    }).done(function(response){


        html += "<tr>";
        html += "<td class= 'transformacion2' > <b> Total " + busqueda + " </b> </td>"; //'transformacion2' es un estilo css para mayúscula
        html += "<td>" + response.numero + "</td>";
        html += "</td>";
        html += "</tr>" 
   
       document.getElementById("datos").innerHTML = html; 
       console.log(response.numero); 
        //  
        var html2 = "";      
        html2 += "<h5> Total " + busqueda + ": "+ response.numero + "</h5>";
        
        document.getElementById("texto").innerHTML = html2;
        //
       
        }).fail(function(response){
         
            console.log(response);
        });

  
      
}

//---------------------------------------------------------------------------

// funcion que trae un REPORTE de los totales de la db
function ReporteData(html){

    var reporte= [];

    $.ajax({

        url: 'http://localhost/api/reporte',
        type: 'GET',
        dataType: 'json'
     

    }).done(function(response){

        $.each(response, function (index, data){

            reporte.push(data.numero);
            
        });


        html += "<tr>";
        html += "<td> <b>TOTAL</b></td>";
        html += "<td>" + reporte[6] + "</td>"; 
        html += "<td>" + reporte[5] + "</td>"; 
        html += "<td>" + reporte[1] + "</td>"; 
        html += "</td>";
        html += "</tr>" 
        
        //console.log(response); 
        document.getElementById("datos").innerHTML = html; 
     
        var html2 = "";      
        html2 += "<h5> Casos confirmados: " + reporte[6] + "</h5>";
            
        document.getElementById("texto").innerHTML = html2;
       
        }).fail(function(response){
         
            console.log(response);
        });

  
      
}

//---------------------------------------------------------------------------

//El gráfico del Index
function GraficoReporte(){
        
    var reporte= [];

    $.ajax({

        url: 'http://localhost/api/reporte',
        type: 'GET',
        dataType: 'json'
     

    }).done(function(response){

        $.each(response, function (index, data){

            reporte.push(data.numero);
            });
            
            console.log(response);

    var ctx = document.getElementById('reporte');
    var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Positivos','Fallecidos', 'Recuperados'],
        datasets: [{
            label: "Casos Confirmados",
            data: [reporte[6], reporte[1], reporte[5]],
            backgroundColor: [
                'rgba(248, 233, 7, 0.7)',
                'rgba(226, 20, 3, 0.7)',
                'rgba(3, 165, 226, 0.7)',

            ],
            borderColor: [
                'rgba(248, 233, 7, 1)',
                'rgba(226, 20, 3, 1)',
                'rgba(3, 165, 226, 1)',
            ],
            borderWidth: 3
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
       
        }).fail(function(response){
         
            console.log (response);
        }); 
   
        
}




        
       



    





