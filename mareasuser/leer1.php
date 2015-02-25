<HTML>
<HEAD>
<TITLE>leer1.php</TITLE>

</HEAD>
<BODY>
<div align="center">
<h1>Actualizar una fecha</h1>
<?php
//Conexion con la base
mysql_connect("localhost","root","");

echo '<FORM METHOD="POST" ACTION="leer12.php">Fecha<br>';

//Creamos la sentencia SQL y la ejecutamos
$sSQL="Select * From febrero Order By fecha";
$result=mysql_db_query("recu",$sSQL);

echo '<select name="fecha">';

//Generamos el menu desplegable
while ($row=mysql_fetch_array($result))
{echo '<option>'.$row["fecha"];}
?>
</select>
<br>
Pmm-hora<br>
<INPUT TYPE="TEXT" name="pmmhora"><br>
	Pmm-Metros<br>
<INPUT TYPE="TEXT" name="pmmmetros"><br>
	Pmt-hora<br>
<INPUT TYPE="TEXT" name="pmthora"><br>
	Pmt-Metros<br>
<INPUT TYPE="TEXT" name="pmtmetros"><br>
	Bmm-hora<br>
<INPUT TYPE="TEXT" name="bmmhora"><br>
	Bmm-Metros<br>
<INPUT TYPE="TEXT" name="bmmmetros"><br>
	Bmm-hora<br>
<INPUT TYPE="TEXT" name="bmthora"><br>
	Bmm-Metros<br>
<INPUT TYPE="TEXT" name="bmtmetros"><br>

<!--<INPUT TYPE="SUBMIT" value="Insertar">-->

<div align="center"><INPUT TYPE="SUBMIT" value="Mostrar"></div>
</FORM>
<div align="center"><a href="lectura.php">Visualizar el contenido de las mareas</a></div>
<div align="center"><a href="leer1.php">Leer uns fecha de la base</a></div>
<div align="center"><a href="lectura.php">Volver a la tabla</a></div>
</div>

</BODY>
</HTML>
