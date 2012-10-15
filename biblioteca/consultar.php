<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Sistema de Control de Biblioteca</title>
		<link href="styles/screen.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="content">
			<h1>Sistema de Control de Biblioteca</h1>
<form>
<?php

$link =  mysql_connect('localhost', 'root', '');
if (!$link) {
    die('No pudo conectarse: ' . mysql_error());
}
echo 'Conectado satisfactoriamente';
mysql_select_db("sicobib", $link);

$result = mysql_query("SELECT nombre_socio,edad,ciudad,colonia,no_casa,calle,ocupacion,iden_personal,comp_dom FROM users", $link);

echo "<table border = '1'>";

echo "<tr> ";

echo "<td><b>Nombre</b></td>";
echo "<td><b>Edad</b></td> ";
echo "<td><b>Ciudad</b></td>";
echo "<td><b>colonia</b></td>";
echo "<td><b>No_Casa</b></td>";
echo "<td><b>calle</b></td>";
echo "<td><b>ocupacion</b></td>";
echo "<td><b>Identificacion Personal</b></td>";
echo "<td><b>comprobante Domicilio</b></td>";

echo "</tr>";

while ($row = mysql_fetch_row($result)){

echo "<tr>";

echo "<td>$row[0]</td>";
echo "<td>$row[1]</td>";
echo "<td>$row[2]</td>";
echo "<td>$row[3]</td>";
echo "<td>$row[4]</td>";
echo "<td>$row[5]</td>";
echo "<td>$row[6]</td>";
echo "<td>$row[7]</td>";
echo "<td>$row[8]</td>";
echo "</tr>";

}

echo "</table>";

?>
</form>
			<p>&nbsp;</p>
		</div>
		<div id="footer">.
		</div>

</body>
</html>