<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
$nombre=$_POST['nombre'];
$password=$_POST['password'];
$conexion=mysql_connect("localhost","root","") 
  or die("Problemas en la conexion");
mysql_select_db("recu",$conexion) or
  die("Problemas en la seleccion de la base de datos");
$registros=mysql_query("select password from users Where nombre= '$nombre'", $conexion)
or die("Problemas en el select".mysql_error());

while ($row=mysql_fetch_array($registros))

  if($password == $row["password"]){
  	echo "Se efectuó la entrada con los datos ingresados."; 
}
else
{
  echo "No existe el usuario con dicho nombre.";
}

mysql_close($conexion);
//echo "Nuevo usuario fue dado de alta.";
?>
</body>
</html>