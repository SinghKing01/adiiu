<?php
include 'config.php';

$query = "";
$resultado = "";

$peticion = $_POST['peticion'];

switch($peticion) {
    case 0:
        $query = "SELECT * FROM Banana";
        $resultado = mysqli_query($conexion, $query);
        break;
    case 1:
        $query = "SELECT * FROM Population";
        $resultado = mysqli_query($conexion, $query);
        break;
    case 2:
        $query = "SELECT * FROM Ventas";
        $resultado = mysqli_query($conexion, $query);
        break;
}

if(!$resultado){
    die("Error");
}else{
    while($data = mysqli_fetch_assoc($resultado)){
        $arreglo[] = array_map("utf8_encode", $data);
    }
    echo json_encode($arreglo);
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>