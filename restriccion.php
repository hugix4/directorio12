<?php 
// Define el usuario y la contraseña de acceso 
$username = "a";//Aqui el nombre de usuario 
$password = "p";// Aqui la contraseña 
if ($_POST['txtUsername'] != $username || $_POST['txtPassword'] != $password) { 
?> 
<h2>Logueate</h2> 
<form name="form" method="post" action="hola.php"> 
<p><label for="txtUsername">Username:</label> 
<br><input type="text" title="Introduce nombre de usuario" name="txtUsername"></p> 
<p><label for="txtpassword">Password:</label> 
<br><input type="password" title="Introduce la contraseña" name="txtPassword"></p> 
<p><input type="submit" name="Submit" value="Login"></p> 
</form> 
<?php 
}else { 
?> 
<p>Esta es la zona protegida. Aqui introduce el contenido que quieres tener protegido</p> 
<a href="hola.php">FAQ's</a>

<?php 
} 
?> 