
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
    // pesan jika data berubah
    echo "<script>alert('Data Stok Obat berhasil diubah'); window.location.href='sistemaEditorial.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data Stok Obat gagal diubah'); window.location.href='sistemaEditorial.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: sistemaEditorial.php'); 
}