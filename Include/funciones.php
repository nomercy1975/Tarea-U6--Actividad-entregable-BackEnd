<?php


function obtenerDatos()
{
 try{
//importar la conexion
require 'database.php';

$sql  = "SELECT * FROM usuarios";
$consulta = mysqli_query($db,$sql);




return $consulta;


 }
 catch(Exception $e){
    echo $e->getMessage();
 }

}



function BuscarTodo($texto)
{
    require 'database.php';
    $sql = "SELECT * from usuarios WHERE id LIKE '%".$texto."%' OR nombre LIKE '%".$texto."%' OR apellido LIKE '%".$texto."%' OR cedula LIKE '%".$texto."%'  ;";
    $consulta = mysqli_query($db,$sql);
    return $consulta;
}



function BuscarId($texto)
    {
        require 'database.php';
        $sql = "SELECT * from usuarios WHERE id LIKE '%".$texto."%';";
        $consulta = mysqli_query($db,$sql);
        return $consulta;
    }
    function BuscarNombre($texto)
    {
        require 'database.php';
        $sql = "SELECT * from usuarios WHERE nombre LIKE '%".$texto."%';";
        $consulta = mysqli_query($db,$sql);
        return $consulta;
    }
    function BuscarApellido($texto)
    {
        require 'database.php';
        $sql = "SELECT * from usuarios WHERE apellido LIKE '%".$texto."%';";
        $consulta = mysqli_query($db,$sql);
        return $consulta;
    }
    function BuscarCedula($texto)
    {
        require 'database.php';
        $sql = "SELECT * from usuarios WHERE id LIKE '%".$texto."%' OR nombre LIKE '%".$texto."%' OR apellido LIKE '%".$texto."%' OR cedula LIKE '%".$texto."%'  ;";
        $consulta = mysqli_query($db,$sql);
        return $consulta;
    }



    
   


?>