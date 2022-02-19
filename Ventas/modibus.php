<?php 
include('../header.php');
include('menunu.php');
if(isset($_POST['act'])){
include ("../conexion.php");
$conecta=conectar();
$usuario=$_POST['usu'];
$sql="SELECT * FROM vendedor WHERE usuario='$usuario'";
$registros=mysqli_query($conecta,$sql);

while($consultador=mysqli_fetch_array($registros)){
  echo "
  
    <div class='H'>
      <h2>Actualizar Vendedor</h2>
      <p>Rellene los campos</p>
       <form name='form1' action='darupdate.php' method='post'>

<center><br>
ID: <input type='text' name='id' class='field'  disabled value=".$consultador['idvendedor'].">
<br><br>
<br>
Nombre: <input type='text' name='nom' class='field' value=".$consultador['nom'].">
<br><br>
Apellidos: <input type='text' name='apellidos' class='field'value=".$consultador['apellidos'].">
<br><br>
Telefono: <input type='text' name='tel' class='field'value=".$consultador['tel'].">
<br><br>
Direccion: <input type='text' name='dir' class='field'value=".$consultador['dir'].">
<br><br>
Usuario: <input type='text' name='usuario'  class='field'value=".$consultador['usuario'].">
<br><br>
Contraseña: <input type='text' name='clave' class='field'value=".$consultador['clave'].">
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