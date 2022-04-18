
<?php
require_once 'conexion.php';
if (isset($_POST['submit'])) {
  $id = $_POST['id_editorial'];
  $nombre = $_POST['nombre_editorial'];
  $dir = $_POST['direccion'];
  $tel = $_POST['telefono_principal'];
  
 
  
  
  
	$query = "UPDATE  EDITORIAL  SET NOMBRE_EDITORIAL ='".$nombre."', DIRECCION ='".$dir."', TELEFONO_PRINCIPAL ='".$tel."' WHERE ID_EDITORIAL = '".$id."' ";
	$statement = oci_parse($conexion,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($conexion);
  if ($res) {
    
    echo "<script>alert('Datos agregados con exito'); window.location.href='sistemaEditorial.php'</script>";
  } else {
    
    echo "<script>alert('Hubo un problemas con los datos'); window.location.href='sistemaEditorial.php'</script>";
  }
} else {
  
  header('Location: sistemaEditorial.php'); 
}