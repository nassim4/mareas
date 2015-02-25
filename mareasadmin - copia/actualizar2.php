<HTML>
<HEAD>
<TITLE>actualizar2.php</TITLE>
</HEAD>
<BODY>
<?php
$pmmhora=htmlentities($_POST['pmmhora']);
$pmmmetros=htmlentities($_POST['pmmmetros']);
$pmthora=htmlentities($_POST['pmthora']);
$pmtmetros=htmlentities($_POST['pmtmetros']);
$bmmhora=htmlentities($_POST['bmmhora']);
$bmmmetros=htmlentities($_POST['bmmmetros']);
$bmthora=htmlentities($_POST['bmmhora']);
$bmtmetros=htmlentities($_POST['bmmmetros']);
$fecha=htmlentities($_POST['fecha']);
//Conexion con la base
mysql_connect("localhost","root","");

$conexion=mysql_connect("localhost","root","") or
  die("Problemas en la conexion");
mysql_select_db("recu",$conexion) or
  die("Problemas en la selección de la base de datos");
$registros=mysql_query("update febrero
                          set pmmhora='$pmmhora', 
                          pmmmetros='$pmmhora',
                          pmthora='$pmmhora',
                          pmtmetros='$pmtmetros',
                          bmmhora='$bmmhora',
                          bmmmetros='$bmmmetros',
                          bmthora='$bmthora',
                          bmtmetros='$bmtmetros'
                        where fecha='$fecha'",$conexion) or
  die("Problemas en el select:".mysql_error());
  echo "La fecha fue modificada con exito";


//Creamos la sentencia SQL y la ejecutamos
//$sSQL="Update clientes Set pmmhora='$_REQUEST[pmmhora]',pmmmetros='$_REQUEST[pmmmetros]',
//pmthora='$_REQUEST[pmthora]',pmtmetros='$_REQUEST[pmtmetros]',
//bmmhora='$_REQUEST[bmmhora]',bmmmetros='$_REQUEST[bmmmetros]',
//bmthora='$_REQUEST[bmthora]',bmtmetros='$_REQUEST[bmtmetros]'
//Where fecha='$_REQUEST[fecha]'";
//mysql_db_query("rec",$sSQL);
?>

<h1><div align="center">Registro Actualizado</div></h1>
<div align="center"><a href="lectura.php">Visualizar el contenido de la base</a></div>

</BODY>
</HTML> 
