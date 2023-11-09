<?php include 'Include/header.php';
?>

<div>

<h1>Captura de datos en pantalla</h1>

</div>

    <h3>Resultado de la consulta</h3>
    <div class="mostrar">

<fieldset id="ecoborn">

<legend>El resultado es:</legend>
    <h1>
<?php

$edad = $_GET['edad'];

if ($edad<18) {
   echo "No es mayor de edad";
}
elseif ($edad>=18) {
    echo "Es mayor de edad";
}
else {
    echo "datos mal introducidos";
}

?>
    </h1>

    </fieldset>

</div>


<?php 
include 'Include/footer.php';
?>