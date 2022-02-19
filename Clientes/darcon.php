<?php

include ("../conexion.php");
$conecta=conectar();

$sql="SELECT * FROM cliente";
$registros=mysqli_query($conecta,$sql);
echo"
<thead>
<table class='table-fill'>
	<tr>
		<th class='text-left'>Nombre</th>
		<th class='text-left'>Apellidos</th>
		
		<th class='text-left'>Direccion</th>		
		<th class='text-left'>Estado</th>		
		<th class='text-left'>Codigo QR</th>		
	</tr>
	</thead>
";
while($consultador=mysqli_fetch_array($registros)){
	echo "
	<tbody class='table-hover'>
	<tr>
		<td class='text-left'>".$consultador['nom']."</td>
		<td class='text-left'>".$consultador['apellidos']."</td>
		
		<td class='text-left'>".$consultador['direccion']."</td>
		<td class='text-left'>".$consultador['estado']."</td>
		<td class='text-left'>".$consultador['codigoqr']."</td>
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


