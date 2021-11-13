<?php
include_once 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

//Se usa para recibir los parametros de axios con el cual lograremos el crud 
$_POST = json_decode(file_get_contents("php://input"),true );

$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';

$id = (isset($_POST['id'])) ? $_POST['id'] : '';
$provedor = (isset($_POST['provedor'])) ? $_POST['provedor'] : '';
$categoria = (isset($_POST['categoria'])) ? $_POST['categoria'] : '';
$stock = (isset($_POST['stock'])) ? $_POST['stock'] : '';

switch($opcion){
    case 1://Crear
        $consulta = "INSERT INTO moviles (provedor, categoria, stock) VALUES('$provedor', '$categoria', '$stock') ";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        break;
    case 2://Modificacion de productos de la base de datos
        $consulta = "UPDATE moviles SET provedor ='$provedor', categoria='$categoria', stock='$stock' WHERE id ='$id' ";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchALL(PDO::FETCH_ASSOC);
        break;
    case 3://Borrar productos de la base de datos
        $consulta = " DELETE FROM moviles WHERE id ='$id' ";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        break;
    case 4://Listar Productos
        $consulta = "SELECT id, provedor, categoria, stock FROM moviles ";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchALL(PDO::FETCH_ASSOC);
        break;

}
print json_encode($data, JSON_UNESCAPED_UNICODE);
$conexion = NULL ;
?>