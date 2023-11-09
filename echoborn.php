<?php include 'Include/header.php';
?>

<div>

<h1>Captura de datos en pantalla</h1>

</div>

<div class="mostrar">

<fieldset id="ecoborn">

<legend>El resultado es:</legend>
<?php




 $nacimiento = new DateTime($_GET["dateborn"]);

 $ahora = new DateTime();


$edad = ($ahora)->diff($nacimiento);

$edad_total =  $edad->y ;


if ($edad_total<18) {
echo "Su edad es ".$edad_total."  años por  tanto:No es mayor de Edad";
}
elseif ($edad_total>=18) {
    echo "Su edad es  ".$edad_total."  años por  tanto:Es mayor de Edad";
}


?>
</fieldset>

</div>


<?php 
include 'Include/footer.php';
   ?>
