<?php 
 //echo "Estas en el Insert_customer.php <br/>";

 $firstname = $_POST['first_name'];
 $lastname = $_POST['last_name'];
 $address = $_POST['address'];
 $email = $_POST['email'];

 //echo $firstname.  "<br/>";
 //echo $lastname.  "<br/>";
 //echo $address.  "<br/>";
 //echo $email.  "<br/>";
 
  // PHP database MYSQL interaccion en 5 pasos.
 //1. Crear una coneccion a la base de datos.
 mysql_connect ("localhost","root","") or die ("No se pudo conectar con el servidor");
 
 //2. Seleccionar una base de datos para usar. --- 
 mysql_select_db("colombia") or die ("No pudo encontrar la base de datos"); 
 
 //3. Realizar consulta de base de datos.
 $sql = "INSERT INTO customer (firstname, lastname, address, email) VALUES ('$firstname','$lastname','$address','$email')";
 
 $squery = mysql_query($sql); 
 
 //4. Use returned data (if any)
 mysql_close();
 header("locxation: index.php");
 
 //5. Close connection.
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 // PHP database MYSQL interaccion en 5 pasos.
 //1. Crear una coneccion a la base de datos.
 //2. Seleccionar una base de datos para usar. --- 
 //3. Realizar consulta de base de datos.
 //4. Use returned data (if any)
 //5. Close connection.
 
 


?>