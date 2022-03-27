<?php


require_once 'conexion.php';
if (isset($_POST['submit'])) {
  $ID_LIBRO = $_POST['ID_LIBRO'];
  $TITULO = $_POST['TITULO'];
  $ID_LENGUAJE = $_POST['ID_LENGUAJE'];
  $ID_AUTOR = $_POST['ID_AUTOR'];
  $TECNOLOGIA = $_POST['TECNOLOGIA'];
  $ID_SEDE = $_POST['ID_SEDE'];
  $ID_EDITORIAL = $_POST['ID_EDITORIAL'];
  $DISPONIBILIDAD = $_POST['DISPONIBILIDAD'];
  

	$query = "INSERT INTO LIBRO (ID_LIBRO,TITULO, ID_LENGUAJE, ID_AUTOR, TECNOLOGIA, ID_SEDE, ID_EDITORIAL, DISPONIBILIDAD)
   VALUES ('".$ID_LIBRO."','".$TITULO."', '".$ID_LENGUAJE."', '".$ID_AUTOR."', '".$TECNOLOGIA."', '".$ID_SEDE."', '".$ID_EDITORIAL."', '".$DISPONIBILIDAD."')";
	$statement = oci_parse($conexion,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($conexion);
  if ($res) {
    // Mensaje si se guardan los datos
    echo "<script>alert('Editorial agregado con exito'); 
	window.location.href='sistemaLibro.php'</script>";
  } else {
    // mensaje si los datos no se puede guardar 
    echo "<script>alert('Editorial no fueron agregados');
	window.location.href='sistemaLibro.php'</script>";
  }
} else {
  //si intentas acceder a esta pagina sera redigido a la pagina indice  index
  header('Location: sistemaLibro.php'); 
}
