<?php
$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);

if(!$id){
    header('Location: /');
}
//CONEXION A DB
require 'includes/cofig/database.php';
$db = conectarDB();
//CONSULTA A DB
$query = "SELECT * FROM propiedades WHERE id=${id}";
//RESULTADO
$resultado = mysqli_query($db, $query);

//PARA REDIRECCIONAR SI EL ID NO EXISTE (ERROR 404)
if(!$resultado->num_rows){
    header('Location: /');
}

$propiedad = mysqli_fetch_assoc($resultado);


require 'includes/funciones.php';
incluirTemplate('header');
?>
<main class="contenedor seccion contenido-centrado">
    <h1><?php echo $propiedad['titulo']; ?></h1>
        <img src="/imagenes/<?php echo $propiedad['imagen']; ?>" alt="imagen de la propiedad" loading="lazy">

    <div class="resumen-propiedad">
        <p class="precio">$ <?php echo $propiedad['precio']; ?></p>
        <ul class="iconos-caracteristicas">
            <li>
                <img class="icono-anuncio" src="build/img/icono_wc.svg" alt="icono wc" loading="lazy">
                <p><?php echo $propiedad['banios']; ?></p>
            </li>
            <li>
                <img class="icono-anuncio" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento" loading="lazy">
                <p><?php echo $propiedad['estacionamientos']; ?></p>
            </li>
            <li>
                <img class="icono-anuncio" src="build/img/icono_dormitorio.svg" alt="icono dormitorio" loading="lazy">
                <p><?php echo $propiedad['habitaciones']; ?></p>
            </li>

        </ul>
        <p><?php echo $propiedad['descripcion']; ?></p>
    </div>
</main>
<?php
mysqli_close($db);
incluirTemplate('footer');
?>