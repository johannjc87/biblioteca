<?php
require_once 'conexion.php';
if (isset($_POST['submit'])) {
  $id_estudiante = $_POST['id_estudiante'];
  $nombre_estudiante = $_POST['nombre_estudiante'];
  $user = $_POST['usuario'];
  $contrasena = $_POST['contrasena'];
  $direccion = $_POST['direccion'];
  $fecha_registro = date("m-d-Y", strtotime($_POST['fecha_registro']));
  
  $query = "UPDATE  ESTUDIANTE  SET NOMBRE_ESTUDIANTE ='".$nombre_estudiante."', USUARIO ='".$user."', CONTRASENA ='".$contrasena."', DIRECCION ='".$direccion."', FECHA_REGISTRO ='".$fecha_registro."' WHERE ID_ESTUDIANTE = '".$id_estudiante."' ";

  
	
    $statement = oci_parse($conexion,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($conexion);
  if ($res) {
    
    echo "<script>alert('Ingresado con exito'); window.location.href='sistemaEstudiante.php'</script>";
  } else {
   
    echo "<script>alert('Hubo un problema'); window.location.href='sistemaEstudiante.php'</script>";
  }
} else {
  
  header('Location: sistemaEstudiante.php'); 
}
