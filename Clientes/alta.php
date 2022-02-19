<?php include("../header.php");
      include("menunu.php");
?>
  
      <div style="clear: both;"></div>
      
    <div class="H">
      <h2>Alta De Clientes</h2>
      <p>Rellene los campos</p>
       <form name='form1' action='darAlta.php' method='post'>

<center><br>
<br>
Nombre: <input type='text' name='nombre' class="field">
<br><br>
Apellidos: <input type='text' name='apellido' class="field">
<br><br>
Direccion: <input type='text' name='dir' class="field">
<br><br> <center/>
<p class="center-content">
<center><input type='submit' name='insertar' value="Insertar" class="btn btn-green">
<br><br>
  <input type='reset' name='cancelar' value="Cancelar"class="btn btn-cancel"></center>
</p>
</br>
</form>
    </div>
    
    <div style="clear: both;"></div>
  </div>
  <?php include("../footer.php");?>