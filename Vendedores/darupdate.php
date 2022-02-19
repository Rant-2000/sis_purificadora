<?php
include ("../conexion.php");
$conecta=conectar();


$nom=$_POST['nom'];
$apellidos=$_POST['apellidos'];
$tel=$_POST['tel'];
$dir=$_POST['dir'];
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

$sql="UPDATE  vendedor  SET nom='$nom',apellidos='$apellidos',tel='$tel',dir='$dir',clave='$clave' WHERE usuario='$usuario'";
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