<?php
include ("../conexion.php");
$conecta=conectar();



$codigoqr=$_POST['codigoqr'];
$estado=$_POST['estado'];
$litros=$_POST['litros'];
$precio=$_POST['precio'];
$sql="UPDATE  botellon  SET estado='$estado',litros='$litros',precio='$precio' WHERE codigoqr='$codigoqr'";
$registros=mysqli_query($conecta,$sql);
if(!$registros)
{
echo "ERROR AL INSERTAR LOS DATOS EN LOS REGISTROS, PROBABLE CLAVE REPETIDA";
exit();
}
echo "
<script language='JavaScript' type='text/JavaScript'>
alert('Modificacion Exitosa')
window.location='inicio.php' 
</script>
";

?>