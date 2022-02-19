<?php 
include('../header.php');
include('menu.php');
if(isset($_POST['act'])){
include ("../conexion.php");
$conecta=conectar();
$usuario=$_POST['usu'];
$sql="SELECT * FROM botellon WHERE codigoqr='$usuario'";
$registros=mysqli_query($conecta,$sql);

while($consultador=mysqli_fetch_array($registros)){
  echo "
  
    <div class='H'>
      <h2>Consulta De Vendedor</h2>
       
       <form name='form1' action='' method='post'>

<center><br>
<br>
Codigo QR: <input type='text' name='codigoqr' class='field'  disabled value=".$consultador['codigoqr']."><br><br>
Litros: <input type='text' name='litros' class='field' disabled value=".$consultador['litros'].">
<br><br>
Estado: <input type='text' name='estado' disabled class='field'value=".$consultador['estado'].">
<br><br>
Precio: <input type='text' name='precio' disabled class='field'value=".$consultador['precio'].">

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