<?php include 'Include/header.php';// etiqueta obligatoria para enlazar los archivos 
?>


<div>
<h1> Calculadora de PHP</h1>
<h2>En el siguiente formulario debe introducir dos numeros para realizar una operacion matematica</h2>
</div>

<div id="calculadora">

<form action="index.php" method="post" id="calculadora">
            <label for="cifra1">Ingrese el primer numero</label>
                <input type="text" name="cifra1" id="cifra1">
            <label for="cifra2">Ingrese el segundo numero</label>
                <input type="text" name="cifra2" id="cifra2">


                <select name="OPERADOR" id="OPERADOR">
                        <option value="suma">Suma</option>
                        <option value="resta">Resta</option>
                        <option value="multiplicacion">multiplicacion</option>
                        <option value="division">Division</option>

                </select>

                <input type="submit" value="Calcular"><br>


</form>

</div>
    <h1>EL RESULTADO ES:
<?php
if(isset($_POST["OPERADOR"])){
    $operacion = $_POST["OPERADOR"];

    switch ($operacion) {
        case "suma":
            echo ($_POST["cifra1"]) + $_POST["cifra2"];
            break;
    
            case "resta":
                echo $_POST["cifra1"] - $_POST["cifra2"];
                    break;
                    case "multiplicacion":
                        echo ($_POST["cifra1"]) * $_POST["cifra2"];
    
                         break;
                         case "division":
                            echo ($_POST["cifra1"]) / $_POST["cifra2"];
                                break;
                             
       
    default:
           echo "NO HA INTRODUCIDO NINGUN VALOR
           O NO HA ESCOJIDO UNA OPERACION,
           POR FAVOR INTENTE DE NUEVO ";
            break;
  
                         }
                        
                        
                        }
?>
</h1>









<?php

include 'Include/footer.php';// etiqueta obligatoria para enlazar los archivos 
?>


