<?php


require_once 'conexion.php';
if (isset($_POST['submit'])) {
  $ID_SEDE = $_POST['ID_SEDE'];
  $NOMBRE_SEDE = $_POST['NOMBRE_SEDE'];
  $UBICACION = $_POST['UBICACION'];
  
  

	$query = "INSERT INTO SEDE (ID_SEDE,NOMBRE_SEDE, UBICACION)
   VALUES ('".$ID_SEDE."','".$NOMBRE_SEDE."', '".$UBICACION."')";
	$statement = oci_parse($conexion,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($conexion);
  if ($res) {
    // Mensaje si se guardan los datos
    echo "<script>alert('Sede agregado con exito'); 
	window.location.href='sistemaSede.php'</script>";
  } else {
    // mensaje si los datos no se puede guardar 
    echo "<script>alert('Sede no fueron agregados');
	window.location.href='sistemaSede.php'</script>";
  }
} else {
  //si intentas acceder a esta pagina sera redigido a la pagina indice  index
  header('Location: sistemaSede.php'); 
}

