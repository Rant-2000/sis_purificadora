<?php
include ("../conexion.php");
$conecta=conectar();


$cliente=$_POST['cl'];
$vendedor=$_POST['ve'];
$botellon=$_POST['bo'];


$sql="INSERT INTO ventas (vendedor,cliente,botellon) VALUES ('$vendedor','$cliente','$botellon')";
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