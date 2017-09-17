<?php
include 'includes/meta.php';
include 'includes/header.php';
?>
<div class="login">
	<h1><img src="./img/reset.png" alt="Cambiar Clave"> ¡Ops! Ingresa tus datos para solicitar nueva clave.</h1>
	<br>
    <form action="resetearMail.php" method="post" enctype="multipart/form-data" name="frmReset" onsubmit="return CheckForm(frmReset);">
		<input type="text" name="username" placeholder="Usuario" pattern=".{5,}" oninvalid="this.setCustomValidity('Ingresar nombre de usuario (Minimo 5 caracteres).')" oninput="setCustomValidity('')" required>
		<br>
		<br>
		<input type="email" name="email" placeholder="Cuenta de Correo" oninvalid="this.setCustomValidity('Ingresar cuenta de correo.')" oninput="setCustomValidity('')" required>
		<br>
		<br>
		<input type="submit" value="Solicitar">
	</form>
	<br>
	<span><a href="./login.php">Iniciar sesión</a></span> | <span><a href="./register.php">Crear cuenta</a></span>
</div>
<?php
include 'includes/footer.php';
?>