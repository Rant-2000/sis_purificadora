<?php include("../header.php");
      include("menunu.php");
?>
  
      <div style="clear: both;"></div>
      
    <div class="H">
      <h2>Realizar Venta</h2>
      <p>Rellene los campos</p>
       <form name='form1' action='darAlta.php' method='post'>

<center><br>
<br>
QR Cliente: <input type='text' name='cl' class="field">
<br><br>
Usuario Vendedor: <input type='text' name='ve' class="field">
<br><br>
QR Botellon: <input type='text' name='bo' class="field">
<br><br> <center/>
<p class="center-content">
<center><input type='submit' name='insertar' value="Vender" class="btn btn-green">
<br><br>
  <input type='reset' name='cancelar' value="Cancelar"class="btn btn-cancel"></center>
</p>
</br>
</form>
    </div>
    
    <div style="clear: both;"></div>
  </div>
  <?php include("../footer.php");?>