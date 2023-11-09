<?php 

include('Include/database.php');

if (isset($_POST['enviar'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['cedula']) >= 1             ) {
	    $name = trim($_POST['nombre']);
	    $lastname = trim($_POST['apellido']);
	    $cedula = trim($_POST['cedula']);
	    $consulta = "INSERT INTO usuarios (nombre, apellido, cedula) VALUES ('$name','$lastname','$cedula')";
	    $resultado = mysqli_query($db,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    } 
	  else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>
