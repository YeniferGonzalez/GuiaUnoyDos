<html>
<head>
</head>
<title>
</title>
<body>
<?php
@$nombre= $_post["nombre"];
@$edad= $_post["edad"];
@$muni= $_post["muni"];
@$tel= $_post["tel"];
@$casa= $_post["casa"];
@$cel= $_post["cel"];
$resultado=$nombre+$edad+$muni+$tel+$casa+$cel;
?>
<form method "post" name "registro" action "almasen.php"><br></P>
	<P>Ingrese Nombre: <input type "text"  name="nombre"><br></P>
	<P>Ingrese Eda: <input type "text" name= "edad"><br></P>
	<P>Ingrese Municipio: <input type "text" name ="muni"><br></P>
	<P>Ingrese Telfono: <input type "text" name ="tel"><br></P>
	<P>Ingrese Casa: <input type "text" name = "casa"><br></P>
	<P>Ingrese Celular:<input type "text" name= "cel"><br></P>
   <input type = "submit"  value= 'Enviar'>
 <input type = "submit"  value= 'BORRAR'>

    </form>
    <p><?php if ($nombre && $edad && $muni && $tel &&  $casa && $cel)
                    echo "LOS DATOS INGRESADOS SON=$resultado";
                    else
                    	if (!$nombre && !$edad && !$muni && !$tel &&  !$casa && !$cel )
                                  echo " INGRESE LOS DATOS POR FABOR";
    ?></p>                  
</body>
</html>