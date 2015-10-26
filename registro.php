<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    </head>
<body>
<div id="apDiv1">
  <p>
  
  
  <!--	
  echo "<script language='javascript'> alert('Datos Guardados !! '); </script>";
      -->
  <?php 

	
	$nombre=$_POST["Nombre"];
	$apellidos=$_POST["Apellidos"];
	$codigo=$_POST["Codigo"];
		$link = mysql_connect("localhost", "root"); 
		mysql_select_db("DatosG", $link) or die("Problemas al conectar:".mysql_error()); //conectar base de datos
	if ($nombre==""){
		
		echo "<script language='javascript'> alert('Debe ingresar un Valor en la casilla  Nombre  '); </script>";
		header('refresh: 1; url =index.html');
	}
	else{
	$guardar_sql=mysql_query("insert into datos (Nombre,Apellidos,Codigo) Values('$nombre','$apellidos', '$codigo')", $link)
					or die("error al guardar ");
					
					header('refresh: 0; url =index.html');
	}
	?>

  </p>

        
        
        
    </body>
</html>
