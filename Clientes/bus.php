<?php include("../header.php");
      include("menunu.php");
?>    <div style="clear: both;"></div>
      
    <div class="H">
      <h2>Busqueda De Clientes</h2>
      <p>Rellene los campos</p>
       <form name='form1' action='darbus.php' method='post'>

<center><br>
<br>
Codigo QR: <input type='text' name='usu' class="field">
<br><br>

<br><br> <center/>
<p class="center-content">
<center><input type='submit' name='act' value="Buscar" class="btn btn-green">
<br><br>
  <input type='reset' name='cancelar' value="Cancelar"class="btn btn-cancel"></center>
</p>
</br>
</form>
    </div>
    
    <div style="clear: both;"></div>
  </div>
  <?php include("../footer.php");?>