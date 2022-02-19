<?php 
include('../header.php');
include('menunu.php');
if(isset($_POST['act'])){
include ("../conexion.php");
$conecta=conectar();
$codigoqr=$_POST['codigoqr'];
$sql="SELECT * FROM cliente WHERE codigoqr='$codigoqr'";
$registros=mysqli_query($conecta,$sql);

while($consultador=mysqli_fetch_array($registros)){
  echo "
  
    <div class='H'>
      <h2>Actualizar Cliente</h2>
      <p>Rellene los campos</p>
       <form name='form1' action='darupdate.php' method='post'>

<center><br>
ID: <input type='text' name='codigoqr' class='field'   value=".$consultador['codigoqr'].">
<br><br>
<br>
Nombre: <input type='text' name='nom' class='field' value=".$consultador['nom'].">
<br><br>
Apellidos: <input type='text' name='apellidos' class='field'value=".$consultador['apellidos'].">
<br><br>

Direccion: <input type='text' name='direccion' class='field'value=".$consultador['direccion'].">
<br><br>
Estado: <input type='text' name='estado'  class='field'value=".$consultador['estado'].">

<br><br> 
  ";
}
echo "<center/>
<p class='center-content'>
<center><input type='submit' name='insertar' value='Actualizar' class='btn btn-green'>
<br><br>
  <input type='reset' name='cancelar' value='Cancelar'class='btn btn-cancel'></center>
</p>
</br>
</form>
    </div>
    
    <div style='clear: both;''></div>
  </div>";
if(!$registros)
{
echo "ERROR AL INSERTAR LOS DATOS EN LOS REGISTROS, PROBABLE CLAVE REPETIDA";
exit();
}
}
include('../footer.php');
?>