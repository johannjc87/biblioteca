


<?php


require_once 'conexion.php';
if (isset($_POST['submit'])) {
  $ID_EDITORIAL = $_POST['ID_EDITORIAL'];
  $NOMBRE_EDITORIAL = $_POST['NOMBRE_EDITORIAL'];
  $DIRECCION = $_POST['DIRECCION'];
  $TELEFONO_PRINCIPAL = $_POST['TELEFONO_PRINCIPAL'];
  

	$query = "INSERT INTO EDITORIAL (ID_EDITORIAL,NOMBRE_EDITORIAL, DIRECCION, TELEFONO_PRINCIPAL)
   VALUES ('".$ID_EDITORIAL."','".$NOMBRE_EDITORIAL."', '".$DIRECCION."', '".$TELEFONO_PRINCIPAL."')";
	$statement = oci_parse($conexion,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($conexion);
  if ($res) {
    // Mensaje si se guardan los datos
    echo "<script>alert('Editorial agregado con exito'); 
	window.location.href='sistemaEditorial.php'</script>";
  } else {
    // mensaje si los datos no se puede guardar 
    echo "<script>alert('Editorial no fueron agregados');
	window.location.href='sistemaEditorial.php'</script>";
  }
} else {
  //si intentas acceder a esta pagina sera redigido a la pagina indice  index
  header('Location: sistemaEditorial.php'); 
}
