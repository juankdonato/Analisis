<?php

$id = $_GET['id'];
 
 // PHP database MYSQL interaccion en 5 pasos.
 //1. Crear una coneccion a la base de datos.
 mysql_connect ("localhost","root","") or die ("No se pudo conectar con el servidor");
 
 //2. Seleccionar una base de datos para usar. --- 
 mysql_select_db("colombia") or die ("No pudo encontrar la base de datos");
 
 //3. Realizar consulta de base de datos.
  $sql = "SELECT * from customer WHERE  id=$id"; 
  $result = mysql_query($sql);
 
 //4. Use returned data (if any)
 $row = mysql_fetch_array($result);
 echo "<h3>++Esta a punto de borrar el siguiente registro++</h3>";
 echo "id: ".$row['id']."<br/>";
 echo "firs name: ".$row['firstname']."<br/>";
 echo "last name: ".$row['lastname']."<br/>";    
 echo "address: ".$row['address']."<br/>";
 echo "email: ".$row['email']."<br/>";
 
 echo "<br/>Esta seguro de borrar el registro seleccionado";
 echo "<a href=\"delete_record.php?id=".$row[id]."\">+ Yes +</a>";
 echo "<a href=\"index.php\">+ No +</a>";
 
 //5. Close connection.
 mysql_close();

?>