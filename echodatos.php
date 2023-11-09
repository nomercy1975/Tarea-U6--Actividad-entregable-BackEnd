<?php include 'Include/header.php';
?>

<div>

<h1>Captura de datos en pantalla</h1>

</div>

<div class="mostrar">



<h1><?php echo 'NOMBRE: '.$_GET["nombre"].'</br>';?></h1>
<h1><?php echo 'APELLIDO: '.$_GET["apellido"].'</br>';?></h1>
<h1><?php echo 'CEDULA DE CUIDADANIA: '.$_GET["cedula"].'</br>';?></h1>





</div>


<?php 
include 'Include/footer.php';
   ?>
