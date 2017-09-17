<body>
<!-- Cabecera -->
<table class="header">
	<tr>
		<td>
			<img src="./img/logo.png" alt="Mercados y Servicios">
		</td>
		<td>
			<div>Ingresar <img src="./img/bar.png" alt="Registrarse"> Registrarse <img src="./img/bar.png" alt="Ingresar">Contacto <span>PUBLICAR</span></div>
		</td>
	</tr>
</table>
<!-- Barra de Busqueda -->
<div class="bar">
	<form name="search" action="search.php" method="post">
		<input class="submit_on_enter" type="search" name="servidor" placeholder="¿Qué estas buscando?" pattern=".{3,}" oninvalid="this.setCustomValidity('Ingresar detalles de búsqueda (Minimo 3 caracteres).')" oninput="setCustomValidity('')" required> 
		<br>
		<input type="submit">
	</form>
</div>
<br>
<!-- Banners publicidad-->
<div>
	<ul id="banners">
	  <li>
		<a href="#slide1">
		  <img src="./img/ads/01.jpg" alt="">
		</a>
	  </li>
	  <li>
		<a href="#slide2">
		  <img src="./img/ads/02.jpg"  alt="">
		</a>
	  </li>
	  <li>
		<a href="#slide3">
		  <img src="./img/ads/03.jpg" alt="">
		</a>
	  </li>
	</ul>
</div>
<br>
<br>

