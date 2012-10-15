<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php 
$nombre=$_POST['nombre'];
$edad=$_POST['edad'];
$ciudad=$_POST['ciudad'];
$colonia=$_POST['colonia'];
$casa=$_POST['no_casa'];
$calle=$_POST['calle'];
$ocupacion=$_POST['ocupacion'];
$idp=$_POST['id_p'];
$comprobante=$_POST['comp'];
 if ($idp){echo $idp;}
$link =  mysql_connect('localhost', 'root', '');
if (!$link) {
    die('No pudo conectarse: ' . mysql_error());
}
echo 'Conectado satisfactoriamente';
mysql_select_db("sicobib", $link);
mysql_query("insert into users (nombre_socio,edad,ciudad,colonia,no_casa,calle,ocupacion,iden_personal,comp_dom) values ('$nombre','$edad','$ciudad','$colonia','$casa','$calle','$ocupacion','$idp','$comprobante')");

mysql_close($link);

?>

</body>
</html>

