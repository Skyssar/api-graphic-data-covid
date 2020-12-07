# Api de Datos COVID 19

El presente proyecto toma la información estadística de covid 19 de la página datos.gov.co para graficarla usando chartjs. Se creó una api para realizar las peticiones a la base de datos.

Para acceder a este proyecto desde el navegador usando XAMPP, se debe crear un alias en httpd-xampp.conf,
con la dirección a la carpeta api del proyecto. Por ej:

Alias /api "C:/xampp/htdocs/projects/apidatos/api/"     ## apidatos es el nombre del proyecto
<Directory "C:/xampp/htdocs/projects/apidatos/api">
AllowOverride All
</Directory>