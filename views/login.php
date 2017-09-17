<?php
include 'includes/meta.php';
include 'includes/header.php';
?>
<div class="login">
	<h1><img src="./img/login.png" alt="Login"> ¡Hola! Ingresa tus datos para iniciar sesión.</h1>
	<br>
	<?php
		if (empty($mensaje)) {
				echo ''."\n";
		}
			else {
				echo '<span class="alert">'.$mensaje.'</span>';
				echo '<br>'."\n";
		};
	?>
    <form action="loginUser.php" method="post" name="frmLogin" onsubmit="return CheckForm(frmLogin);">
		<input type="text" name="username" placeholder="Usuario" pattern=".{5,}" oninvalid="this.setCustomValidity('Ingresar nombre de usuario (Minimo 5 caracteres).')" oninput="setCustomValidity('')" required>
		<br>
		<br>
		<input type="password" name="password" placeholder="Contraseña" pattern=".{8,}" oninvalid="this.setCustomValidity('Ingresar contraseña (Minimo 8 caracteres).')" oninput="setCustomValidity('')" required>
		<br>
		<br>
		<input type="submit" value="Ingresar">
	</form>
	<br>
	<span><a href="./reset.php">Recordar clave</a></span> | <span><a href="./register.php">Crear cuenta</a></span>
</div>
<?php
include 'includes/footer.php';
?>