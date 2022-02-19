<?php
include ("../conexion.php");
$conecta=conectar();


$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$tel=$_POST['tel'];
$dir=$_POST['dir'];
$usu=$_POST['usu'];
$contra=$_POST['contra'];

$sql="INSERT INTO vendedor (nom,apellidos,tel,dir,usuario,clave) VALUES ('$nombre','$apellido','$tel','$dir','$usu','$contra')";
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