<?php


require_once 'conexion.php';
if (isset($_POST['submit'])) {
  $ID_ESPERA = $_POST['ID_ESPERA'];
  $ID_ESTUDIANTE = $_POST['ID_ESTUDIANTE'];
  $ID_LIBRO = $_POST['ID_LIBRO'];
  $FECHA = date("m-d-Y", strtotime($_POST['FECHA']));
  

	$query = "INSERT INTO LISTA_ESPERA (ID_ESPERA,ID_ESTUDIANTE, ID_LIBRO, FECHA)
   VALUES ('".$ID_ESPERA."','".$ID_ESTUDIANTE."','".$ID_LIBRO."' ,'".$FECHA."')";
	$statement = oci_parse($conexion,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($conexion);
  if ($res) {
    // Mensaje si se guardan los datos
    echo "<script>alert('iTem en espera agregado con exito'); 
	window.location.href='sistemaEspera.php'</script>";
  } else {
    // mensaje si los datos no se puede guardar 
    echo "<script>alert('iTeam en espera no fue agregado');
	window.location.href='sistemaEspera.php'</script>";
  }
} else {
  //si intentas acceder a esta pagina sera redigido a la pagina indice  index
  header('Location: sistemaEspera.php'); 
}
