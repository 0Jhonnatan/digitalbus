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

	
	$codigo=$_POST["Codigo"];
	$link = mysql_connect("localhost", "root"); 
mysql_select_db("DatosG", $link); 
$result = mysql_query("SELECT * FROM datos WHERE Codigo=$codigo ", $link); 
if ($row = mysql_fetch_array($result)){ 
      echo "<table bgcolor=ffffc border = '1'> \n"; 
//Mostramos los nombres de las tablas 
echo "<tr> \n"; 
while ($field = mysql_fetch_field($result)){ 
            echo "<td bgcolor=7D997D><h3><center>$field->name</center></h3></td> \n"; 
} 
      echo "</tr> \n"; 
do { 
            echo "<tr> \n"; 
            echo "<td>".$row[0]."</td> \n"; 
            echo "<td>".$row[1]."</td> \n"; 
            echo "<td>".$row[2]."</td> \n";
            echo "</tr> \n"; 
      } while ($row = mysql_fetch_array($result)); 
            echo "</table> \n"; 
} else { 
echo "¡ No se ha encontrado ningún registro !"; 
} 
	?>

  </p>

        
        
        
    </body>
</html>
