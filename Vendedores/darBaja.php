<?php
include ("../conexion.php");
$conecta=conectar();


$usu=$_POST['usu'];

$sql="DELETE FROM vendedor  WHERE usuario='$usu'";
$registros=mysqli_query($conecta,$sql);
if(!$registros)
{
echo "ERROR AL BORRAR LOS DATOS EN LOS REGISTROS, PROBABLE CLAVE REPETIDA";
exit();
}
echo "
<script language='JavaScript' type='text/JavaScript'>
alert('ELIMINACION EXITOSA')
window.location='inicio.php' 
</script>
";

?>