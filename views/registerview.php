<?php
include 'includes/meta.php';
include 'includes/header.php';
?>
<form action="newCustomer.php" method="POST" enctype="multipart/form-data" name="frmRegister" onsubmit="return CheckForm(frmRegister);">
    <table class="register">
        <tr>
            <td><h1><img src="./img/register.png" alt="Login"> Ingresa tus datos.</h1></td>
            <td>
                <?php
                    if (empty($mensaje)) {
                            echo ''."\n";
                    }
                        else {
                            echo '<span class="alert">'.$mensaje.'</span>';
                    };
                ?>
            </td>
        </tr>
        <tr>
            <td><input type="text" name="username" placeholder="Usuario" pattern=".{5,}"  oninvalid="this.setCustomValidity('Ingresar nombre de usuario (Minimo 5 caracteres).')" oninput="setCustomValidity('')" required></td>
            <td><input type="password" name="password" placeholder="Contraseña" pattern=".{8,}" oninvalid="this.setCustomValidity('Ingresar contraseña (Minimo 8 caracteres).')" oninput="setCustomValidity('')" required></td>
        </tr>
        <tr>
            <td><input type="email" name="email" placeholder="Cuenta de Correo" oninvalid="this.setCustomValidity('Ingresar cuenta de correo.')" oninput="setCustomValidity('')" required></td>
            <td><input type="text" name="phone" placeholder="Telefono" oninvalid="this.setCustomValidity('Ingresar numero de telefono.')" oninput="setCustomValidity('')" required></td>
        </tr>
        <tr>
            <td>
                <select name="provincia" size="1" id="provincia" required>
					<option value="0" selected="selected" disabled>Provincia</option>
					<?php  echo $salidaProvincia ;?>
                </select>
            </td>
            <td>
                <select name="partido" size="1" id="partido" required>
					<option value="0" selected="selected" disabled>Partido</option>
					<?php  echo $salidaPartido ;?>
				</select>
            </td>
        </tr>
        <tr>
            <td>
                <select name="localidad" size="1" id="localidad" required>
					<option value="0" selected="selected" disabled>Localidad</option>
					<?php  echo $salidaLocalidad ;?>
				</select>
            </td>
            <td><input type="text" name="address" placeholder="Domicilio" oninvalid="this.setCustomValidity('Ingresar un domicilio valido.')" oninput="setCustomValidity('')" required></td>
        </tr>
        <tr>
            <td><input type="submit" value="Registrarse"></td>
            <td><span>Al registrarme, declaro que soy mayor de edad y acepto los <a href="./conditions.php" target="_blank">Términos y condiciones</a> y las <a href="./privacy.php" target="_blank">Políticas de privacidad</a> de Mercados y Servicios.</span></td>
        </tr>
    </table>
</form>
<?php
include 'includes/footer.php';
?>