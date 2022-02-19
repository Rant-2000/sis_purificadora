<?php

include ("../conexion.php");
$conecta=conectar();

$sql="SELECT * FROM botellon";
$registros=mysqli_query($conecta,$sql);
echo"
<thead>
<table class='table-fill'>
	<tr>
		<th class='text-left'>ID</th>
		<th class='text-left'>Litros</th>		
		<th class='text-left'>Estado</th>				
		<th class='text-left'>Codigo QR</th>		
		<th class='text-left'>Precio</th>		
	</tr>
	</thead>
";
while($consultador=mysqli_fetch_array($registros)){
	echo "
	<tbody class='table-hover'>
	<tr>
		<td class='text-left'>".$consultador['idbotellon']."</td>
		<td class='text-left'>".$consultador['litros']."</td>
		
		<td class='text-left'>".$consultador['estado']."</td>
		<td class='text-left'>".$consultador['codigoqr']."</td>
		<td class='text-left'>".$consultador['precio']."</td>
	</tr>

	";	
}
echo " </tbody></table>	";
if(!$registros)
{
echo "ERROR AL INSERTAR LOS DATOS EN LOS REGISTROS, PROBABLE CLAVE REPETIDA";
exit();
}



?>


