<? 
// ahora verificamos si el usuario y las contrase�as coinciden.
if ($_POST['usuario']=='h' && $_POST['password']=='h' )
{
$coincide="si";
}
else
{
$coincide="no";
} 
?>
<html>
<head>
<title>Pagina restringida</title>
</head>
<body>
<? if ($coincide=="si")
{
// aqu� ponemos el contenido de la pagina restringida, por ejemplo
?>
<p>Esta es la pagina restringida</p>
<? }
else{
//ahora pondremos un mensaje de error en caso de que la contrase�a no sea correcta
?> 
<p>Usuario o contrase�a incorrectos, por favor int�ntelo de nuevo y en caso de error comun�queselo al administrador </p>
<? } ?>
</body>
</html>