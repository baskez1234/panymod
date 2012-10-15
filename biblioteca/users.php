<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Sistema de Control de Biblioteca</title>
		<link href="styles/screen.css" rel="stylesheet" type="text/css" />

</head>
<?php
						  function checar($variable){
							  if ($variable){
								  echo "checked='checked'";
								  }
							  }
						  ?>

<? checar(id_p);?>
<body>
		<div id="content">
			<h1>Sistema de Control de Biblioteca</h1>
			<form action="insertar.php" method="post">
				<p><strong>Nota:</strong> los campos marcados con<span class="required">*</span> son campos requeridos</p>
				<fieldset id="personal">
					<legend><span>DATOS PERSONALES</span>
					</legend><ol>
						<li>
							<label for="forename" title="Enter your forename" class="required">Nombre<span>*</span></label>
							<input name="nombre" type="text" id="nombre" value="Escribe tu nombre" />	
						</li>
						<li>
						  <label for="surname4" title="Enter your surname" class="required">Edad<span></span></label>
                          <input name="edad" type="text" id="edad" />	
					  </li>
						<li>
						  <label for="occupation" title="Choose your occupation" class="required">Tipo de Usuario<span>*</span></label>
							<input name="usuario" type="radio" class="cliente" id="occupation" value="1" />
							Cliente
							<input name="usuario" type="radio" class="administrador" id="occupation" value="1" />
							Administrador
						</li>
						<li>
						  <label for="surname2" title="Enter your surname" >Ocupacion<span>*</span></label>
                          <input name="ocupacion" type="text" id="ocupacion" />	
					  </li>
					</ol>
				</fieldset>
				<fieldset id="address">
				  <legend>DIRECCION</legend>
					<ol>
						<li>
							<label for="address1" title="Address Line 1" class="required">Ciudad<span></span></label>
                          <input name="ciudad" type="text" id="ciudad" />	
						</li>
						<li>
						  <label for="address2" title="Address Line 2" class="required">Colonia</label>
                          <input name="colonia" type="text" id="colonia" />	
							
						</li>
						<li>
							<label for="address3" title="Address Line 3" class="required">Numero de Casa<span>*</span></label>
                          <input name="no_casa" type="text" id="no_casa" />	
						</li>
						<li>
							<label for="address4" title="Address Line 4" class="required">Calle<span></span></label>
                          <input name="calle" type="text" id="calle" />	
						</li>
						<li>
							<label for="postcode" title="Postcode" class="required">Identificacion Personal<span>*</span></label>
						</li>
						<li>
						  <input name="id_p" type="checkbox" value="1" />
						  Presentado
                          
						  <br/>
                        </li>
						<li>
						  <label for="phone" title="Enter your phone number" class="required">Comprobante de domicilio</label>
					  </li>
						<li>
						  <input type="checkbox" name="comp" value="1" />
						  Presentado
						  <br/>
					  </li>
						<li></li>
					</ol>
				</fieldset>
				<fieldset id="submitform">
					<input type="submit" value="Crear cuenta" /></label>
				</fieldset>
			</form>
			<p>&nbsp;</p>
		</div>
		<div id="footer">.
		</div>

</body>
</html>