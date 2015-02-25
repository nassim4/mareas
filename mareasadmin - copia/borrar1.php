<HTML>
<HEAD>
<TITLE>borrar1.php</TITLE>
</HEAD>
<BODY>
<div align="center">
<h1>Borrar una fecha</h1>
<br>

<?php
//Conexion con la base
mysql_connect("localhost","root","");

echo '<FORM METHOD="POST" ACTION="borrar2.php">Fecha<br>';

//Creamos la sentencia SQL y la ejecutamos
$sSQL="Select * From febrero Order By fecha";
$result=mysql_db_query("recu",$sSQL);

echo '<select name="fecha">';

//Mostramos los registros en forma de menú desplegable
while ($row=mysql_fetch_array($result))
{echo '<option>'.$row["fecha"];}
mysql_free_result($result)
?>

</select>
<br>
<INPUT TYPE="SUBMIT" value="Borrar">
</FORM>
<div align="center"><a href="lectura.php">Visualizar el contenido de las mareas</a></div>
<div align="center"><a href="insertar.html">Insertar al contenido de la base</a></div>
	<div align="center"><a href="actualizar1.php">Modificar el contenido de la base</a></div>
	<div align="center"><a href="borrar1.php">Borrar del contenido de la base</a></div>
	<div align="center"><a href="user.php">Insertar usuario a la base</a></div>
</div>

</BODY>
</HTML>
