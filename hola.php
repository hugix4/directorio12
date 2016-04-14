<?php
echo "{$_POST['txtUsername']}";
echo "{$_POST['txtPassword']}";
echo $username;
echo $password;

if ($_POST['txtUsername'] = $username && $_POST['txtPassword'] = $password){
echo "Bienvendo Administrador o Moderador usted puede ver esta seccion";
} else {
echo "Area restringida!!";
}
?>