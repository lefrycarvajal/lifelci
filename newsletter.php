<?php
include("conexion.php");

if(isset($_POST['send'])){

	if(
	   
 	strlen($_POST['correo']) >= 1) {
		 

		$email = trim($_POST['correo']);
	
		$fechareg = date("d/m/y");
		$consulta = "INSERT INTO news(correo, fecha) VALUES ('$email','$fechareg')";
		$resultado = mysqli_query($conex,$consulta);
		if($resultado) {
			
			?>
<h3 class="ok">AHORA RECIBIRAS TODAS LAS NOTIFICACIONES</h3>
<?php
		} else {
			?>
	<h3 class="bad"> HA OCURRIDO UN ERROR</h3>
			
			<?php
			}
		} else {
		
              ?>
<h3 class="bad">POR FAVOR COMPLETE LOS CAMPOS</h3>
			<?php
			
		}
		
}
	



?>
