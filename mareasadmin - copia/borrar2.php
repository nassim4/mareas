<HTML>
<HEAD>
<TITLE>borrar2.php</TITLE>
</HEAD>
<BODY>
<?php
//Conexion con la base
//mysql_connect("localhost","root","");
$conexion=mysql_connect("localhost","root","") or
  die("Problemas en la conexion");
//Creamos la sentencia SQL y la ejecutamos
  mysql_select_db("recu",$conexion) or
  die("Problemas en la selección de la base de datos");
//$sSQL="Delete From clientes Where nombre='$nombre'";
//mysql_db_query("ejemplo",$sSQL);

$registros=mysql_query("select * from febrero
                        where fecha='$_POST[fecha]'",$conexion) or
  die("Problemas en el select:".mysql_error());
if ($reg=mysql_fetch_array($registros))
{
  mysql_query("delete from febrero where fecha='$_POST[fecha]'",$conexion) or
    die("Problemas en el select:".mysql_error());

  echo "Se efectuó el borrado de la fecha ingresada.";
}
else
{
  echo "No existe una fila con dicha fecha.";
}
mysql_close($conexion);

?>


<div align="center"><a href="lectura.php">Visualizar el contenido de las mareas</a></div>
<div align="center"><a href="insertar.html">Insertar al contenido de la base</a></div>
<div align="center"><a href="actualizar1.php">Modificar el contenido de la base</a></div>
<div align="center"><a href="borrar1.php">Borrar del contenido de la base</a></div>
<div align="center"><a href="user.php">Insertar usuario a la base</a></div>
</BODY>
</HTML> 
