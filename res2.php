<? 
// ahora verificamos si el usuario y las contraseñas coinciden.
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
// aquí ponemos el contenido de la pagina restringida, por ejemplo
?>
<p>Esta es la pagina restringida</p>
<? }
else{
//ahora pondremos un mensaje de error en caso de que la contraseña no sea correcta
?> 
<p>Usuario o contraseña incorrectos, por favor inténtelo de nuevo y en caso de error comuníqueselo al administrador </p>
<? } ?>
</body>
</html>