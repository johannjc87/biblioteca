<?php
//Conexion
$username ="ESTUDIANTE";
$password ="123";
$database ="LOCALHOST/orcl";
$conexion=oci_connect ($username,$password,$database);
if(!$conexion) {
$err=oci_error();
echo "No se pudo conectar ORACLE", $err['text'];
} else {
echo "Conexión Exitosa";
}
?>