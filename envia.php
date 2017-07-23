<html> 
<head> 
<script>
	var xmlhttp;
function ajax(datos, ruta) //CODIGO OFICIAL DE W3SHOOLS, SIMPLEMEENTE LE HICE UNOS CAMBIOS, PARA ADAPTARLO A ESTE EJEMPLO.
{
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("cuerpo").innerHTML=xmlhttp.responseText;//MOSTRAMOS LOS DATOS ENVIADOS EN UN DIV, CON ID CUERPO
    }
  }
xmlhttp.open("GET",ruta+datos,true); //ENVIAMOS LOS DATOS POR GET, LE DECIMOS A QUE RUTA INCLUIDO EL ARCHIVO, Y LE PASAMOS TAMBIEN LOS DATOS.
//alert("URL: "+ruta+datos);
xmlhttp.send();
}
//------------------------------------------------------------------
function recibe(){		//FUNCION QUE SE EJECUTA CUANDO PRESIONAMOS EL BOTON ENVIAR
		var dato = document.getElementById('datos').value;//OBTENEMOS LOS DATOS DEL CAMPO DE TEXTO
		ajax("valor="+dato,"recibe.php?"); //EJECUTAMOS EL METODO AJAX Y LE PASASMOS LOS DATOS, Y LE DECIMOS QUE ARCHIVO ES EL QUE RECIBE LOS DATOS
		//PARA PASAR DATOS PUR URL, LA SINTAXIS ES LA SIGUIENTE: archivo+?+variable+dato ---> recibe.php?valor=codigoweblibre.
		//PARA PASAR MAS DE UNA VARIABLE, SE SEPARAN CON &, archivo+?+vaiable+dato ---> recibe.php?valor_1=visitare&valor_2=codigoweblibre.
	}
</script>
</head> 
<body style="font-family:Verdana, Geneva, sans-serif; font-size:24px; text-align:center;"> 
<form method="post"> 
<fieldset style="width:60%;">
<h2>Enviar datos por GET a un archivo. AJAX - PHP - Javascript - HTML</h2>
<input type="text" id="datos" size="45" name="datos" > 
<input type="button" onClick="recibe();" value="Enviar Datos" > 
<div id="cuerpo"></div> 
<div style="color:#039;">
<h3>Canal en youtube: codigoweblibre, suscr&iacute;bete.</h3>
</div>
</fieldset>
</form> 
</body> 
</html> 