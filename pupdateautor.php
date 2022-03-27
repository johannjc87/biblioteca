<?php
require_once 'conexion.php';
if (isset($_POST['submit'])) {
  $id_autor = $_POST['id_autor'];
  $nombre_autor = $_POST['nombre_autor'];
  $fecha_nacimiento = date("m-d-Y", strtotime($_POST['fecha_nacimiento']));
  
 
 
  
  
	$query = "UPDATE  AUTOR  SET NOMBRE_AUTOR ='".$nombre_autor."', FECHA_NACIMIENTO ='".$fecha_nacimiento."' WHERE ID_AUTOR = '".$id_autor."' ";
	$statement = oci_parse($conexion,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($conexion);
  if ($res) {
    
    echo "<script>alert('Ingresado con exito'); window.location.href='sistema.php'</script>";
  } else {
   
    echo "<script>alert('Hubo un problema'); window.location.href='sistema.php'</script>";
  }
} else {
  
  header('Location: sistema.php'); 
}


/*
require_once 'conexion.php';
if (isset($_POST['submit'])) {
  $id_autor = $_POST['id_autor'];
  $nombre_autor = $_POST['nombre_autor'];
  $fecha_nacimiento = $_POST['fecha_nacimiento'];
 
 
  
  
	$query = "UPDATE  AUTORES  SET NOMBRE_AUTOR ='".$nombre_autor."', FECHA_NACIMIENTO ='".$fecha_nacimiento."' WHERE ID_AUTOR = '".$id_autor."' ";
	$statement = oci_parse($conexion,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($conexion);
  if ($res) {
    
    echo "<script>alert('Ingresado con exito'); window.location.href='sistema.php'</script>";
  } else {
   
    echo "<script>alert('Hubo un problema'); window.location.href='sistema.php'</script>";
  }
} else {
  
  header('Location: sistema.php'); 
}
*/