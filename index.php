<?php include("header.php");?>
	<div id="content">	
		<div id="header">
			<div id="logo">
				<h1>Purificadora Agua de calzon<sup> beta</sup></h1>
				<p>Con toloache</p>
			</div>
	
			<div id="search">
				<a onclick="toggle('searchform');">+ SEARCH</a>
				<div id="searchform" style="display: none;">
					<form method="post" action="">
						<p><input class="searchfield" name="search_query" id="keywords" value="Search Keywords" type="text" />
						<input class="searchbutton" name="submit" value="Search" type="submit" /></p>
					</form>
				</div>
			</div>
		</div>
		<ul id="menu">
			<li><a class="current" href="#">Inicio</a></li>
			<li><a href="Vendedores/inicio.php">Vendedores</a></li>
			<li><a href="Clientes/inicio.php">Cliente</a></li>
			<li><a href="Botellones/inicio.php">Botellon</a></li>
			<li><a href="Ventas/inicio.php">Ventas</a></li>
			<li><a href="#">Reportes</a></li>
			
		</ul>
		<div style="clear: both;"></div>
			
		<div class="third">
			<h2>Who we are?</h2>
			<p>Maecenas libero neque, volutpat sit amet, varius et, pretium quis, purus. Nulla ut magna. Nunc nec dui eget erat vulputate sagittis. Suspendisse fermentum odio. Mauris magna sem, pellentesque sit amet, nonummy vel, nonummy id, velit. Curabitur sodales lacus at massa. In hac habitasse platea dictumst. Aliquam lacus massa, pellentesque sit amet, feugiat et, cursus volutpat. Integer nibh. Maecenas mattis ipsum.</p>
			<p class="more"><a href="http://www.connectednc.com/">Read More</a></p>
		</div>
		<div class="third">
			<h2>What we do?</h2>
			<p>Mauris facilisis, quam ut semper adipiscing, magna diam laoreet ante, ac varius massa dolor sit amet augue. Vivamus purus. Integer consequat. Nunc et nunc. Phasellus augue diam, vestibulum non, iaculis eget, tristique sed, lectus. Sed pede. Nullam egestas ante a mauris. Aliquam metus turpis, luctus ac, sagittis eget, elementum tincidunt, massa. Aenean justo nisl, luctus sit amet, malesuada ac, dignissim.</p>
			<p class="more"><a href="http://www.connectednc.com/">Read More</a></p>
		</div>
		<div class="third last">
			<h2>Get in touch!</h2>
			<p>Suspendisse egestas fringilla odio. Donec lacinia tristique ante. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam blandit ultricies nisl. Nullam dapibus, mauris id scelerisque feugiat, sapien augue porta ipsum, ut blandit tellus enim vel mauris. Praesent accumsan metus vel ipsum. Maecenas aliquam blandit mi. Pellentesque dolor magna, posuere vel, condimentum id.</p>
			<p class="more"><a href="http://www.connectednc.com/">Read More</a></p>
		</div>
		<div style="clear: both;"></div>
	</div>
	<?php include("footer.php");?>