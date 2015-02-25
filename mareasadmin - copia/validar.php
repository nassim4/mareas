<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
$conexion=mysql_connect("localhost","root","") 
  or die("Problemas en la conexion");
mysql_select_db("recu",$conexion) or
  die("Problemas en la seleccion de la base de datos");
mysql_query("insert into users(nombre,password) values 
   ('$_POST[nombre]','$_POST[password]')", 
   $conexion) or die("Problemas en el select".mysql_error());
mysql_close($conexion);
echo "El alumno fue dado de alta.";
?>
<h1><div align="center">Registros Insertados</div></h1>
<div align="center"><a href="lectura.php">Visualizar el contenido de la tabla de mareas.</a></div>
<div align="center"><a href="insertar.html">Insertar al contenido de la base</a></div>
  <div align="center"><a href="actualizar1.php">Modificar el contenido de la base</a></div>
  <div align="center"><a href="borrar1.php">Borrar del contenido de la base</a></div>
  <div align="center"><a href="user.php">Insertar usuario a la base</a></div>
</body>
</html>