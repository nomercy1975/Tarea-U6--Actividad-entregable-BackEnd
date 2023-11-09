<?php include 'Include/header.php';
?>
<form action="./echoborn.php" method="get" id="calculadora">
            <label for="dateborn">Ingrese su fecha de nacimiento</label>
        
            <input type="date" asp-format="{0:yyyy-MM-dd}" asp-for="FechaNac"  name="dateborn" id="dateborn"/>
            <input type="submit" value="enviar">

            </form>


<?php

include 'Include/footer.php';







?>