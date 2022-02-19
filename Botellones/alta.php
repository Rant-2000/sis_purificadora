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
Litros: <input type='text' name='litros' class="field">
<br><br>
Precio: <input type='text' name='precio' class="field">
<br><br>
Cantidad: <input type='text' name='can' class="field">
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