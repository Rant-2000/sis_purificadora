<?php
include ("../conexion.php");
include("generador.php");
$conecta=conectar();

$can=$_POST['can'];

for ($i=0; $i <$can ; $i++) { 	
$codigo=generar_password_complejo(5);


$sql="CALL bot_alta($codigo)";
$registros=mysqli_query($conecta,$sql);
}
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