<?php
include ("../conexion.php");
include("generador.php");
$conecta=conectar();


$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$dir=$_POST['dir'];
$codigo=generar_password_complejo(5);
$estado=0;

$sql="INSERT INTO cliente (nom,apellidos,direccion,estado,codigoqr) VALUES ('$nombre','$apellido','$dir','$estado','$codigo')";
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