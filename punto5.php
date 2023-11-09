

<?php
    //Importar funciones
    require 'Include/funciones.php';

    $datashift = obtenerDatos();
    /*echo "<pre>";
    var_dump($datashift);
    echo "</pre>";*/
    //echo __DIR__;
    //echo __FILE__;

    if (isset($_GET['buscar'])) {
        $datashift = BuscarTodo($_GET['buscar']);
    }

    if (isset($_GET['id'])) {
        $datashift = BuscarId($_GET['id']);
    }
    if (isset($_GET['nombre'])) {
        $datashift = BuscarNombre($_GET['nombre']);
    }
    if (isset($_GET['apellido'])) {
        $datashift = BuscarApellido($_GET['apellido']);
    }
    if (isset($_GET['cedula'])) {
        $datashift = BuscarCedula($_GET['cedula']);

    }
    
    ?>

<?php include 'Include/header.php';
      

?>





<div id="maestro">

               
                            <form class="formulario" action="punto5.php" method="get" id='calculadora'>
                            <label for="buscas">buscar un dato:</label>
                                <input type="text" name="buscar" id="buscar" placeholder="Buscar">
                                <input type="submit" value="buscar" class="boton">
                            </form>
    

                        
      
                
                             
                                    <form class="formulario" action="punto5.php" method="get">
                                            <label for="id">Id:</label>
                                            <input type="number" name="id" id="id" class="enterdata">
                                            <input type="submit" value="buscar" class="boton">
                                    </form>
                           
                    
                
                    
                            <form class="formulario" action="punto5.php" method="get">
                                <label for="nombre">Nombre:</label>
                                <input type="text" name="nombre" id="nombre" class="enterdata">
                                <input type="submit" value="buscar" class="boton">
                            </form>
                
            
                
                       
                            <form  class="formulario" action="punto5.php" method="get">
                                <label for="apellido">Apellido:</label>
                                <input type="text" name="apellido" id="apellido" class="enterdata">
                                <input type="submit" value="buscar" class="boton">
                            </form>
                       
                  

                
                       
                            <form  class="formulario" action="punto5.php" method="get">
                                <label for="cedula">Cedula:</label>
                                <input type="number" name="cedula" id="cedula" class="enterdata">
                                <input type="submit" value="buscar" class="boton">
                            </form>
                      
                  
                   
                </div>

 <!--Tabla de datos impresa-->


<div id="tabla">
<table >
                <thead>
                <tr>
                 <th>ID   </th>
                    <th>NOMBRE</th>
                 <th>APELLIDOS</th>
                    <th>CEDULA</th>
                </tr>

                </thead>
                <?php while($juego = mysqli_fetch_array($datashift)){ ?>
        <tr>
                <td><?php echo($juego['id']); ?></td>    
                <td><?php echo($juego['nombre']); ?></td>
                <td><?php echo($juego['apellido']); ?></td>
                <td><?php echo($juego['cedula']); ?></td>
        </tr>

                    <?php } ?>
</table>

</div>

<!----Introducir datos en  tabla  sql------>
            <div>
                <div><h1>Ingresa nuevos registros a la base de datos</h1></div>
                <form  class="formulario" action="" method="post" id="calculadora">
                        <label for="nombre">Nombre:</label>
                        <input type="text" name="nombre" id="nombre" require placeholder="introducir nombre">
                        <label for="apellido">Apellido:</label>
                        <input type="text" name="apellido" id="apellido"  placeholder="introducir apellido" require>
                        <label for="cedula">Cedula:</label>
                        <input type="number" name="cedula" id="cedula"  placeholder="introducir # de cedula" require>
                        <input type="submit" value="Guardar datos" name='enviar'>

                </form>
            </div>
            <div>
                
                
                <?php
require 'Include/registrar.php';



?>
</div>


                    
               
<?php include 'Include/footer.php';?>



