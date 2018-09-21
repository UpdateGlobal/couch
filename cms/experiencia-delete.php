<?php include "module/conexion.php"; ?>
<?php include "module/verificar.php"; ?>
<?php 
$cod_experiencia = $_REQUEST['cod_experiencia'];
$imagen = $_REQUEST['imagen'];
$eliminar = "DELETE FROM experiencia WHERE cod_experiencia='$cod_experiencia'";
$resultado = mysqli_query($enlaces,$eliminar);
header("Location:experiencia.php");
?>