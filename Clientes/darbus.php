<?php 
include('../header.php');
include('menu.php');
if(isset($_POST['act'])){
include ("../conexion.php");
$conecta=conectar();
$usuario=$_POST['usu'];
$sql="SELECT * FROM cliente WHERE codigoqr='$usuario'";
$registros=mysqli_query($conecta,$sql);

while($consultador=mysqli_fetch_array($registros)){
  echo "
  
    <div class='H'>
      <h2>Consulta De Vendedor</h2>
       
       <form name='form1' action='' method='post'>

<center><br>
<br>
Nombre: <input type='text' name='nom' class='field'  disabled value=".$consultador['nom'].">
<br><br>
Apellidos: <input type='text' name='apellidos' disabled class='field'value=".$consultador['apellidos'].">
<br><br>

Direccion: <input type='text' name='dir' disabled  class='field'value=".$consultador['direccion'].">
<br><br>
Estado: <input type='text' name='usuario' disabled class='field'value=".$consultador['estado'].">
<br><br>
Contraseña: <input type='text' name='clave' disabled class='field'value=".$consultador['codigoqr'].">
<br><br> 
  ";
}
echo "<center/>
<p class='center-content'>
<center>
<br><br>
  
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