<?php
include("conexion.php");

if(isset($_POST['enviar'])){

	if(strlen($_POST['nombre']) >= 1 &&

	   strlen($_POST['correo']) >= 1 &&

       strlen($_POST['telefono']) >= 1 &&
		 
	   strlen($_POST['mensaje']) >= 1) {
	
		
		$nombre = trim($_POST['nombre']);
		$correo = trim($_POST['correo']);
        $telefono = trim($_POST['telefono']);
		$mensaje = trim($_POST['mensaje']);
		$consulta = "INSERT INTO reserva(nombre, correo, telefono, mensaje) VALUES ('$nombre', '$correo', '$telefono', '$mensaje')";
		$resultado = mysqli_query($conex,$consulta);
		if($resultado) {
			
			?>
<h3 class="ok">SU MENSAJE SE HA ENVIADO CORRECTAMENTE</h3>
<?php
		} else {
			?>
	<h3 class="bad">HA OCURRIDO UN ERROR</h3>
			
			<?php
			}
		} else {
		
              ?>
<h3 class="bad">PORFAVOR COMPLETE LOS CAMPOS</h3>
			<?php
			
		}
		
}
	



?>


