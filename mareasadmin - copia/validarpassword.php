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
$registros=mysql_query("select * from users Where nombre= '$nombre'", $conexion)
or die("Problemas en el select".mysql_error());
 


while ($row=mysql_fetch_array($registros))
if($password == $row["1"]){
  	echo "se fectuo la entrada."; 
  	header('Location: insertar.html'); 
}

else
{
  echo "el password no es valido.";
  header('Location: index.php');
}
  /**if($password != $row['password']){
  	  echo' <form action="validarpassword.php" method="post">
<div align="center">
<input type="text" name="nombre" onFocus="vaciar(this)" onBlur="verificarEntrada(this)" value="Ingrese nombre:"><br></div>
<div align="center">
<input type="password" name="password" onFocus="vaciar(this)" onBlur="verificarEntrada(this)" value="Ingrese contaseña:"><br></div>
<br>
<div align="center">
<input type="submit" value="Registrar"></div>
</form>';  
  
}*/
/**else
{
  echo "el password no es valido.";
  echo' <form action="validarpassword.php" method="post">
<div align="center">
<input type="text" name="nombre" onFocus="vaciar(this)" onBlur="verificarEntrada(this)" value="Ingrese nombre:"><br></div>
<div align="center">
<input type="password" name="password" onFocus="vaciar(this)" onBlur="verificarEntrada(this)" value="Ingrese contaseña:"><br></div>
<br>
<div align="center">
<input type="submit" value="Registrar"></div>
</form>'; 
  header('Location: index.php');
}*/


mysql_close($conexion);
//echo "Nuevo usuario fue dado de alta.";
?>
</body>
</html>