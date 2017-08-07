<?php
$conexion = new mysqli("localhost", "qinchaba_root", "qincha2017", "qinchaba_qincha");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}

?>
