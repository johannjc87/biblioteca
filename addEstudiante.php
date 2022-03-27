<?php


require_once 'conexion.php';
if (isset($_POST['submit'])) {
  $ID_ESTUDIANTE = $_POST['ID_ESTUDIANTE'];
  $NOMBRE_ESTUDIANTE = $_POST['NOMBRE_ESTUDIANTE'];
  $USUARIO = $_POST['USUARIO'];
  $CONTRASENA = $_POST['CONTRASENA'];
  $DIRECCION = $_POST['DIRECCION'];
  $FECHA_REGISTRO = date("m-d-Y", strtotime($_POST['FECHA_REGISTRO']));
  

	$query = "INSERT INTO ESTUDIANTE (ID_ESTUDIANTE,NOMBRE_ESTUDIANTE, USUARIO, CONTRASENA, DIRECCION, FECHA_REGISTRO)
   VALUES ('".$ID_ESTUDIANTE."','".$NOMBRE_ESTUDIANTE."','".$USUARIO."','".$CONTRASENA."','".$DIRECCION."','".$FECHA_REGISTRO."')";
	$statement = oci_parse($conexion,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($conexion);
  if ($res) {
    // Mensaje si se guardan los datos
    echo "<script>alert('Estudiante agregado con exito'); 
	window.location.href='sistemaEstudiante.php'</script>";
  } else {
    // mensaje si los datos no se puede guardar 
    echo "<script>alert('Estudiante no fue agregado');
	window.location.href='sistemaEstudiante.php'</script>";
  }
} else {
  //si intentas acceder a esta pagina sera redigido a la pagina indice  index
  header('Location: sistemaEstudiante.php'); 
}
