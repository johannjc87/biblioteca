

<?php


require_once 'conexion.php';
if (isset($_POST['submit'])) {
  $ID_AUTOR = $_POST['ID_AUTOR'];
  $NOMBRE_AUTOR = $_POST['NOMBRE_AUTOR'];
  $FECHA_NACIMIENTO = date("m-d-Y", strtotime($_POST['FECHA_NACIMIENTO']));
  

	$query = "INSERT INTO AUTOR (ID_AUTOR,NOMBRE_AUTOR, FECHA_NACIMIENTO)
   VALUES ('".$ID_AUTOR."','".$NOMBRE_AUTOR."', '".$FECHA_NACIMIENTO."')";
	$statement = oci_parse($conexion,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($conexion);
  if ($res) {
    // Mensaje si se guardan los datos
    echo "<script>alert('Libro agregado con exito'); 
	window.location.href='sistema.php'</script>";
  } else {
    // mensaje si los datos no se puede guardar 
    echo "<script>alert('Libros no fueron agregados');
	window.location.href='sistema.php'</script>";
  }
} else {
  //si intentas acceder a esta pagina sera redigido a la pagina indice  index
  header('Location: sistema.php'); 
}
