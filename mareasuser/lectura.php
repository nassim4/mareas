<HTML>
<HEAD>
<TITLE>lectura.php</TITLE>
<style>
         tr:nth-child(odd){
                
                background-color: #cc9900;
                color:000000;
            }
            tr:nth-child(even){

                background-color: #ff9933;
                color:000000;
            }
            table:th-child(){
                border-style: solid;
                
                font-size:  large;
                color:000000;
            }
            
        </style>
</HEAD>
<BODY>
<h1><div align="center">Lectura de la tabla</div></h1>
<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "recu";
//Conexion con la base
mysql_connect($host,$user,$pass);

//Ejecutamos la sentencia SQL
$result=mysql_db_query($db ,"select * from febrero Order By fecha");
?>
<table align="center">
<tr>
<th>Fecha</th>
<th>Pmm/h</th>
<th>Pmm/m</th>
<th>Pmt/h</th>
<th>Pmt/m</th>
<th>Bmm/h</th>
<th>Bmm/m</th>
<th>Bmt/h</th>
<th>Bmt/m</th>
</tr>
<?php
//Mostramos los registros
while ($row=mysql_fetch_array($result))
{
echo '<tr><td>'.$row["fecha"].'</td>';
 echo     '<td>'.$row["pmmhora"].'</td>';
 echo     '<td>'.$row["pmmmetros"].'</td>';
 echo     '<td>'.$row["pmthora"].'</td>';
  echo    '<td>'.$row["pmtmetros"].'</td>';
  echo    '<td>'.$row["bmmhora"].'</td>';
echo      '<td>'.$row["bmmmetros"].'</td>';
   echo   '<td>'.$row["bmthora"].'</td>';
echo '<td>'.$row["bmtmetros"].'</td></tr>';
}

?>
</table>

<!--<div align="center">
<a href="insertar.html">Añadir una nueva fecha</a><br>
<a href="actualizar1.php">Actualizar una fecha existente</a><br>
<a href="borrar1.php">Borrar una fecha</a><br>
</div>-->
<div align="center"><a href="lectura.php">Visualizar el contenido de las mareas</a></div>
<div align="center"><a href="leer1.php">Leer uns fecha de la base</a></div>

</BODY>
</HTML>
