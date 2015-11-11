<?php

// PHP database MYSQL interaccion en 5 pasos.
 //1. Crear una coneccion a la base de datos.
  mysql_connect ("localhost","root","") or die ("No se pudo conectar con el servidor");
 
 //2. Seleccionar una base de datos para usar. --- 
 mysql_select_db("colombia") or die ("No pudo encontrar la base de datos"); 
 
 //3. Realizar consulta de base de datos.
 $sql = "SELECT * FROM customer";
 $result = mysql_query($sql); 
 

?>

<html>
<head>
<title>Basic</title>
</head>

<body>
<blockquote>
<h3>+ List of customer + </h3> <h3><a href="index.php">+ home +</a></h3>
<table border="1">	

<?php

 //4. Use returned data (if any)
 //echo "tu estas en la tabla de visualizacion de clientes";
 while ($row = mysql_fetch_array($result)){
 echo "<tr>";
 echo "<td>", $row['firstname'], "</td>";
 echo "<td>", $row['lastname'], "</td>";
 echo "<td>", $row['address'], "</td>";
 echo "<td>", $row['email'], "</td>";
 echo "<td><a href=\"edit_customer.php?id=".$row['id']."\">+ Editar +</a></td>";
 echo "<td><a href=\"delete_customer.php?id=".$row['id']."\">+ Delete +</a></td>";
 echo "</tr>";
 }

?>
</table>
</blockquote>

</body>
</html> 

<?php

 //5. Close connection.
 mysql_close();
 
 ?>