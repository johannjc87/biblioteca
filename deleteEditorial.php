<?php
require_once 'conexion.php';
// cek id
if (isset($_GET['id'])) {
  $ID = $_GET['id'];
	$sql = "delete from EDITORIAL where ID_EDITORIAL='$ID' ";
	$parsesql = oci_parse($conexion, $sql);
	$q = oci_execute($parsesql) or die(oci_error());
	
  
  if ($q) {
    // Mensaje si la eliminacion es exitosa
    echo "<script>alert('Datos eliminados con éxito'); window.location.href='sistemaEditorial.php'</script>";
  } else {
    // Si falla la eliminacion 
    echo "<script>alert('La eliminación fallo'); window.location.href='sistemaEditorial.php'</script>";
  }
} else {
  // si intenta acceder a este archivo directamente, será redirigido a la página de índice
  header('Location:sistemaEditorial.php');
}