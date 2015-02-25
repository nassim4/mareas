<html>
<head>
<title>Problema</title>
</head>
<script type="text/javascript">
function vaciar(control)
{
  control.value='';
}
function verificarEntrada(control)
{
  if (control.value=='')
    alert('Debe ingresar datos');
}
</script>
<body>
<div align="center"><h2>Alta users</h2></div>

<form action="validarpassword.php" method="post">
<div align="center">
<input type="text" name="nombre" onFocus="vaciar(this)" onBlur="verificarEntrada(this)" value="Ingrese nombre:"><br></div>
<div align="center">
<input type="password" name="password" onFocus="vaciar(this)" onBlur="verificarEntrada(this)" value="Ingrese contaseña:"><br></div>
<br>
<div align="center">
<input type="submit" value="Registrar"></div>
</form>
</div>
</body>
</html>