<?php

	$id = $_GET['id']; 
	
 // PHP database MYSQL interaccion en 5 pasos.
 //1. Crear una coneccion a la base de datos.
 mysql_connect ("localhost","root","") or die ("No se pudo conectar con el servidor");
 
 //2. Seleccionar una base de datos para usar. --- 
 mysql_select_db("colombia") or die ("No pudo encontrar la base de datos");
 
 //3. Realizar consulta de base de datos.
   $sql = "DELETE FROM customer WHERE  id=$id"; 
   $result = mysql_query($sql);
 
 //4. Use returned data (if any)
 //5. Close connection.
 mysql_close();
 
 header("Location: index.php");

?>