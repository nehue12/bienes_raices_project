<?php
//CONEXION A BASE DE DATOS
require 'includes/cofig/database.php';
$db = conectarDB();

$errores = [];


//AUTENTICAR USUARIO
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // echo "<pre>";
    // var_dump($_POST);
    // echo "</pre>";

    $email = mysqli_real_escape_string($db, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
    $pass = mysqli_real_escape_string($db, $_POST['pass']);

    if (!$email) {
        $errores[] = 'El e-mail es obligatorio o no es válido.';
    }
    if (!$pass) {
        $errores[] = 'La contraseña es obligatoria o no es válida.';
    }
    if (empty($errores)) {
        //REVISAR SI EL USUARIO EXISTE
        $query = "SELECT * FROM usuarios WHERE email = '${email}'";
        $resultado = mysqli_query($db, $query);

        if ($resultado->num_rows) {
            //REVISAR SI EL PASSWORD ES CORRECTO
            $usuario = mysqli_fetch_assoc($resultado);
            //VERIFICAR SI EL PASSWORD ES CORRECTO
            $auth = password_verify($pass, $usuario['pass']);

            if ($auth) {
                //EL USUARIO INGRESO CORRECTAMENTE
                session_start();
                //LLENAR EL ARREGLO DE LA SESION
                $_SESSION['usuario'] = $usuario['email'];
                $_SESSION['puesto'] = 'administrador';
                $_SESSION['login'] = true;

                header('Location: /admin');
                // echo "<pre>";
                // var_dump($_SESSION);
                // echo "</pre>";
            } else {
                //LA CONTRASEÑA ES INCORRECTA
                $errores[] = "La contraseña es incorrecta";
            }
        } else {
            $errores[] = 'El usuario no existe';
        }
    }
}

//INCLUYE HEADER
require 'includes/funciones.php';
incluirTemplate('header');
?>
<main class="contenedor seccion contenido-centrado">
    <h1>INICIAR SESIÓN</h1>
    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>

    <?php endforeach; ?>

    <form action="" method="POST" class="formulario">
        <fieldset>
            <legend>Credenciales</legend>

            <label for="email">E-Mail</label>
            <input type="email" name="email" id="email" placeholder="Tu e-mail" required>

            <label for="pass">Contraseña</label>
            <input type="password" name="pass" id="pass" placeholder="Tu contraseña" required>
        </fieldset>

        <input type="submit" value="Iniciar Sesión" class="boton boton-verde">
    </form>
</main>
<?php
incluirTemplate('footer');
?>