<?php
require_once 'conexion.php';
if (isset($_POST['submit'])) {
  $id_libro = $_POST['id_libro'];
  $titulo = $_POST['titulo'];
  $id_lenguaje = $_POST['id_lenguaje'];
  $id_autor = $_POST['id_autor'];
  $tecnologia = $_POST['tecnologia'];
  $id_sede = $_POST['id_sede'];
  $id_edit = $_POST['id_editorial'];
  $disp = $_POST['disponibilidad'];
  
  
  $query = "UPDATE  LIBRO  SET TITULO ='".$titulo."', ID_LENGUAJE ='".$id_lenguaje."', ID_AUTOR ='".$id_autor."', TECNOLOGIA ='".$tecnologia."', ID_SEDE ='".$id_sede."', ID_EDITORIAL ='".$id_edit."', DISPONIBILIDAD ='".$disp."' WHERE ID_LIBRO = '".$id_libro."' ";

  
	
    $statement = oci_parse($conexion,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($conexion);
  if ($res) {
    
    echo "<script>alert('Ingresado con exito'); window.location.href='sistemaLibro.php'</script>";
  } else {
   
    echo "<script>alert('Hubo un problema'); window.location.href='sistemaLibro.php'</script>";
  }
} else {
  
  header('Location: sistemaEstudiante.php'); 
}
