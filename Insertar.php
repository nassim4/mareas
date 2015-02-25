<HTML>
<HEAD>
<TITLE>Insertar.php</TITLE>
</HEAD>
<BODY>
<?php
$pmmhora=htmlentities($_POST['pmmhora']);
$pmmmetros=htmlentities($_POST['pmmmetros']);
$pmthora=htmlentities($_POST['pmthora']);
$pmtmetros=htmlentities($_POST['pmtmetros']);
$bmmhora=htmlentities($_POST['bmmhora']);
$bmmmetros=htmlentities($_POST['bmmmetros']);
$bmthora=htmlentities($_POST['bmthora']);
$bmtmetros=htmlentities($_POST['bmtmetros']);
$fecha=htmlentities($_POST['fecha']);
//Conexion con la base
//mysql_connect("localhost","root","");
//Ejecucion de la sentencia SQL
//mysql_db_query("ejemplo","insert into clientes ('$nombre','$telefono') values ($nombre,$telefono)");
//mysql_db_query("ejemplo",$sSQL);
 $conexion=mysql_connect("localhost","root","") or
    die("Problemas en la conexion");

	mysql_select_db("recu",$conexion) or
    die("Problemas en la seleccion de la base de datos");

  mysql_query("insert into febrero(fecha,pmmhora,pmmmetros,pmthora,
  	pmtmetros,bmmhora,bmmmetros,bmthora,bmtmetros) values 
  ('$fecha','$pmmhora','$pmmmetros','$pmthora',
  '$pmtmetros','$bmmhora','$bmmmetros',
  '$bmthora','$bmtmetros')", $conexion) or
    die("Problemas en el select".mysql_error());
  
  mysql_close($conexion);

  //echo "El usuario fue dado de alta.";
?>
<script>
alert("Se ha añadido una fecha.");
</script>
<h1><div align="center">Registros Insertados</div></h1>
<div align="center"><a href="lectura.php">Visualizar el contenido de la tabla de mareas.</a></div>
<div align="center"><a href="insertar.html">Insertar al contenido de la base</a></div>
  <div align="center"><a href="actualizar1.php">Modificar el contenido de la base</a></div>
  <div align="center"><a href="borrar1.php">Borrar del contenido de la base</a></div>
  <div align="center"><a href="user.php">Insertar usuario a la base</a></div>
</BODY>
</HTML>
