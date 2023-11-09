




<?php include 'Include/header.php';
?>
<form action="./echodatos.php" method="get" id="calculadora">
            <label for="nombre">Ingrese su nombre</label>
            <input type="text" name="nombre" id="nombre" require>
            <label for="apellido">Ingrese su Apellido</label>
            <input type="text" name="apellido" id="apellido" require>
            <label for="cedula">Ingrese su numero de cedula</label>
            <input type="number" name="cedula" id="cedula" require>
            <input type="submit" value="Enviar">
</form>


<?php

include 'Include/footer.php';







?>