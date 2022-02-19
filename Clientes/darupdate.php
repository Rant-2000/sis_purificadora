<?php
include ("../conexion.php");
$conecta=conectar();


$nom=$_POST['nom'];
$apellidos=$_POST['apellidos'];
$dir=$_POST['direccion'];
$codigoqr=$_POST['codigoqr'];
$estado=$_POST['estado'];
$sql="UPDATE  cliente  SET nom='$nom',apellidos='$apellidos',direccion='$dir',estado='$estado' WHERE codigoqr='$codigoqr'";
$registros=mysqli_query($conecta,$sql);
if(!$registros)
{
echo "ERROR AL INSERTAR LOS DATOS EN LOS REGISTROS, PROBABLE CLAVE REPETIDA";
exit();
}
echo "
<script language='JavaScript' type='text/JavaScript'>
alert('INSERCIÓN EXITOSA')
window.location='inicio.php' 
</script>
";

?>