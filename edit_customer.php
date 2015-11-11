<?php

$id = $_GET['id'];

 // PHP database MYSQL interaccion en 5 pasos.
 //1. Crear una coneccion a la base de datos.
 mysql_connect ("localhost","root","") or die ("No se pudo conectar con el servidor");
 
 //2. Seleccionar una base de datos para usar. 
 mysql_select_db("colombia") or die ("No pudo encontrar la base de datos");
  
 //3. Realizar consulta de base de datos.
 $sql = "SELECT * FROM customer WHERE id=$id";
 $result = mysql_query($sql);  
 
 //4. Use returned data (if any)
 $row = mysql_fetch_array($result);

?>

<html>
<head>
<title>Basic</title>
</head>
<body>
<form method="POST" action="update_customer.php">
<blockquote>

<h2>+ Record to Edit + </h2>
id	:	<input type="text" name="id" value="<?php echo $row['id']; ?>" readonly="readonly"/><br/><br/>
first name:	<input type="text" name="firstname" value="<?php echo $row['firstname']; ?>"/><br/><br/>
last name:	<input type="text" name="lastname" value="<?php echo $row['lastname']; ?>"/><br/><br/>
address:	<br/><br/>
<textarea name="address" cols="25" rows="10">
<?php echo $row['address']; ?>
</textarea><br/><br/>
email:		<input type="text" name="email" value="<?php echo $row['firstname']; ?>"><br/><br/>
<input type="submit" name="submit" value="save"/>
<input type="button" name="cancel" value="cancel" onclick="location.href='index.php'"/><br/><br/> 
</blockquote>
</form>
</body>
</html>

<?php

 //5. Close connection.
 mysql_close();

?>


