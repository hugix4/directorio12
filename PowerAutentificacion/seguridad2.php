<? 
//vemos si el usuario y contrase�a es v�ildo 
if ($_POST["usuario"]=="miguel" && $_POST["contrasena"]=="qwerty"){ 
    //usuario y contrase�a v�lidos 
    session_name("loginUsuario"); 
    //asigno un nombre a la sesi�n para poder guardar diferentes datos 
   session_start(); 
    // inicio la sesi�n 
    $_SESSION["autentificado"]= "SI"; 
    //defino la sesi�n que demuestra que el usuario est� autorizado 
    $_SESSION["ultimoAcceso"]= date("Y-n-j H:i:s"); 
    //defino la fecha y hora de inicio de sesi�n en formato aaaa-mm-dd hh:mm:ss 
    header ("Location: aplicacion.php"); 
}else { 
    //si no existe le mando otra vez a la portada 
    header("Location: index.php?errorusuario=si"); 
} 
?> 