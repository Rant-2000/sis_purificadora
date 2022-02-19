<?php 
include('../header.php');
include('menunu.php');
if(isset($_GET['act'])){
include ("../conexion.php");
$conecta=conectar();
$usuario=$_GET['usu'];
$sql="SELECT * FROM vendedor WHERE usuario='$usuario'";
$registros=mysqli_query($conecta,$sql);

while($consultador=mysqli_fetch_array($registros)){
//ID: <input type='text' name='id' class='field'  disabled value=".<?php $consultador["idvendedor"] 
?>

<div class='H'>
      <h2>Actualizar Vendedor</h2>
      <p>Rellene los campos</p>
       <form name='form1' action='darupdate.php' method='post'>

<center><br> 
	
ID: <input type='text' name='id' class='field'  disabled value="<?php echo ( isset ( $consultador['idvendedor'] ) ? $consultador['idvendedor'] : '' ); ?>">

<br><br>
<br>
Nombre: <input type='text' name='nom' class='field' value="<?php echo ( isset ( $consultador['nom'] ) ? $consultador['nom'] : '' ); ?>">
<br><br>
Apellidos: <input type='text' name='apellidos' class='field'value="<?php echo ( isset ( $consultador['apellidos'] ) ? $consultador['apellidos'] : '' ); ?>">
<br><br>
Telefono: <input type='text' name='tel' class='field'value="<?php echo ( isset ( $consultador['tel'] ) ? $consultador['dir'] : '' ); ?>">
<br><br>
Direccion: <input type='text' name='dir' class='field'value="<?php echo ( isset ( $consultador['dir'] ) ? $consultador['dir'] : '' ); ?>">
<br><br>
Usuario: <input type='text' name='usuario'  class='field'value="<?php echo ( isset ( $consultador['usuario'] ) ? $consultador['usuario'] : '' ); ?>">
<br><br>
Contraseña: <input type='text' name='clave' class='field'value="<?php echo ( isset ( $consultador['clave'] ) ? $consultador['clave'] : '' ); ?>">
<br><br> 


<center/>
<p class='center-content'>
<center><input type='submit' name='insertar' value='Actualizar' class='btn btn-green'>
<br><br>
  <input type='reset' name='cancelar' value='Cancelar'class='btn btn-cancel'></center>
</p>
</br>
</form>


<?php
}
if(!$registros)
{
echo "ERROR AL INSERTAR LOS DATOS EN LOS REGISTROS, PROBABLE CLAVE REPETIDA";
exit();
}
}
include('../footer.php');
?>





