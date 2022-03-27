<?php


require_once 'conexion.php';
if (isset($_POST['submit'])) {
  $ID_OBSOLETO = $_POST['ID_OBSOLETO'];
  $ID_LIBRO = $_POST['ID_LIBRO'];
  $MOTIVO = $_POST['MOTIVO'];
  $ID_FUNCIONARIO = $_POST['ID_FUNCIONARIO'];
  
  

	$query = "INSERT INTO LIBROS_OBSOLETOS (ID_OBSOLETO, ID_LIBRO, MOTIVO, ID_FUNCIONARIO)
   VALUES ('".$ID_OBSOLETO."','".$ID_LIBRO."', '".$MOTIVO."', '".$ID_FUNCIONARIO."')";
	$statement = oci_parse($conexion,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($conexion);
  if ($res) {
    // Mensaje si se guardan los datos
    echo "<script>alert('Libro obsoleto agregado con exito'); 
	window.location.href='sistemaObsoleto.php'</script>";
  } else {
    // mensaje si los datos no se puede guardar 
    echo "<script>alert('Libro obsoleto no fueron agregados');
	window.location.href='sistemaObsoleto.php'</script>";
  }
} else {
  //si intentas acceder a esta pagina sera redigido a la pagina indice  index
  header('Location: sistemaObsoleto.php'); 
}
