<?php

include ("../conexion.php");
$conecta=conectar();

$sql="SELECT * FROM vendedor";
$registros=mysqli_query($conecta,$sql);
echo"
<thead>
<table class='table-fill'>
	<tr>
		<th class='text-left'>Nombre</th>
		<th class='text-left'>Apellidos</th>
		<th class='text-left'>Telefono</th>		
		<th class='text-left'>Direccion</th>		
		<th class='text-left'>Usuario</th>		
		<th class='text-left'>Clave</th>		
	</tr>
	</thead>
";
while($consultador=mysqli_fetch_array($registros)){
	echo "
	<tbody class='table-hover'>
	<tr>
		<td class='text-left'>".$consultador['nom']."</td>
		<td class='text-left'>".$consultador['apellidos']."</td>
		<td class='text-left'>".$consultador['tel']."</td>
		<td class='text-left'>".$consultador['dir']."</td>
		<td class='text-left'>".$consultador['usuario']."</td>
		<td class='text-left'>".$consultador['clave']."</td>
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


