<HTML>
<HEAD>
<link rel="stylesheet" type="text/css" href="Pag1.css">
<TITLE>Coordinaci&oacute;n General de Lenguas UNAM</TITLE>

<script language="javascript" type="text/javascript">
function vacio(cadena)
  {                                    // DECLARACION DE CONSTANTES
    var blanco = " \n\t" + String.fromCharCode(13); // blancos
                                       // DECLARACION DE VARIABLES
    var i;                             // indice en cadena
    var es_vacio;                      // cadena es vacio o no
    for(i = 0, es_vacio = true; (i < cadena.length) && es_vacio; i++) // INICIO
      es_vacio = blanco.indexOf(cadena.charAt(i)) != - 1;
    return(es_vacio);
  }

function comprobarRadio(radio)
{
  for(i = 0;i < radio.length;i++)
  {
    if(radio[i].checked)
    {
      return true;
    }
  }
  return false;
}

// ejemplo validacion formulario
function ValidaCampos(form)
  {
    if(vacio(form.Nombre.value) ||vacio(form.Plantel.value) || vacio(form.Turno.value) || vacio(form.TituloDelTexto.value) || vacio(form.Grupos.value) || vacio(form.Asignatura.value) || vacio(form.FechaDeEdicion.value) || vacio(form.FechaDeAnalisis.value) || vacio(form.Asignatura.value))
      alert("Faltan Datos Generales");
    //else if(!comprobarRadio(form.1))
    //alert("Faltan preguntas =S ");  
  }

</script>
</HEAD>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<body>
<?
//Conexion con la base
$link = mysql_connect("mysql6.000webhost.com", "a6831370_hugi1", "h0lamund0");

//selección de la base de datos con la que vamos a trabajar 
mysql_select_db("a6831370_prueba1",$link); 

echo '<FORM METHOD="POST" ACTION="actualizar2.php">Nombre<br>';

//Creamos la sentencia SQL y la ejecutamos ConsultaAlfa Nombre,Telefono,Edad,Sexo,mail
$sSQL="Insert into ConsultaAlfa (Nombre, Telefono, Edad, Sexo, mail)  Values ('Luigi',55951039, 25, 'M','mariobros@nintendo.com')";
mysql_query($sSQL);
?>

<form name="formOne" action="apgform1.7.php" method="post" onSubmit="return ValidaCampos(this)">
<img src="UNAM100AniosHch.png" style="float:right"/>
<div align="center"><h1>Coordinación General de Lenguas</h1></div>
<div align="left"><table align="center" width="85%" cellpadding="8">
	<tr>
		<td colspan="6"><p><br><br>
<br>
</p></td>
	</tr>
	<tr><td colspan="6"><h2>Datos Generales</h2></td></tr>
	<tr>
		<td align="right"><label for="apPat">Apellido paterno:</label></td>
		<td align="left"><input id="apPat" type="text" name="apPat" size="30" value=""/></td>
		<td align="right"><label for="apMat">Apellido materno:</label></td>
		<td align="left"><input id="apMat" type="text" name="apMat" size="30" value=""/></td>		
		<td align="right"><label for="Nombre">Nombre(s):</label></td>
		<td align="left"><input id="Nombre" type="text" name="Nombre" size="30" value=""/></td>
		</tr>
	<tr>
		
</table>
</div>
</form>
</body>
</html>

<!-- Fecha y firma de la página -->
<!--<address color:""">Desde el 15 de Marzo de 2011<br>
Hugix</address>-->
</HTML>