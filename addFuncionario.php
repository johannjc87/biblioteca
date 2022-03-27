<?php


require_once 'conexion.php';
if (isset($_POST['submit'])) {
  $ID_FUNCIONARIO = $_POST['ID_FUNCIONARIO'];
  $NOMBRE_FUNCIONARIO = $_POST['NOMBRE_FUNCIONARIO'];
  $ID_SEDE = $_POST['ID_SEDE'];
  $STATUS_LABORAL = $_POST['STATUS_LABORAL'];
  $SALARIO = $_POST['SALARIO'];
  

	$query = "INSERT INTO FUNCIONARIO (ID_FUNCIONARIO,NOMBRE_FUNCIONARIO, ID_SEDE, STATUS_LABORAL, SALARIO)
   VALUES ('".$ID_FUNCIONARIO."','".$NOMBRE_FUNCIONARIO."', '".$ID_SEDE."', '".$STATUS_LABORAL."', '".$SALARIO."')";
	$statement = oci_parse($conexion,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($conexion);
  if ($res) {
    // Mensaje si se guardan los datos
    echo "<script>alert('Funcionario agregado con exito'); 
	window.location.href='sistemaFuncionario.php'</script>";
  } else {
    // mensaje si los datos no se puede guardar 
    echo "<script>alert('Funcionario no fue agregado');
	window.location.href='sistemaFuncionario.php'</script>";
  }
} else {
  //si intentas acceder a esta pagina sera redigido a la pagina indice  index
  header('Location: sistemaFuncionario.php'); 
}

