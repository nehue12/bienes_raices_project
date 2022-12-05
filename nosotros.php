<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>
<main class="contenedor seccion">
    <h1>Conoce sobre nosotros</h1>

    <div class="contenedor-nosotros">
        <div class="imagen">
            <picture>
                <source srcset="build/img/nosotros.webp" type="image/webp">
                <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/blog1.jpg" alt="entrada blog">
            </picture>
        </div>
        <div class="texto">
            <blockquote>25 Años de experiencia</blockquote>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est libero doloribus labore velit voluptas
                exercitationem repellendus reprehenderit autem, ducimus cumque, voluptatem quibusdam! Officiis
                maxime aperiam quis ex similique veniam veritatis.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio beatae nesciunt nemo, similique
                aut corporis culpa nostrum, aperiam, repellendus maxime velit placeat consequatur debitis sed earum
                tempore magnam. Tempore, ratione!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio beatae nesciunt nemo, similique
                aut corporis culpa nostrum, aperiam, repellendus maxime velit placeat consequatur debitis sed earum
                tempore magnam. Tempore, ratione!!</p>
        </div>
    </div>
</main>

<section class="contenedor seccion">
    <h1>Más sobre nosotros</h1>
    <div class="iconos-nosotros">
        <div class="icono">
            <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
            <h3>Seguridad</h3>
            <p>Lorem ipsum, dolor sit ames laborum, excepturi at expedita cum ex fugiat!</p>
        </div>
        <div class="icono">
            <img src="build/img/icono2.svg" alt="Icono precio" loading="lazy">
            <h3>Precio</h3>
            <p>Lorem ipsum, dolor sit ames laborum, excepturi at expedita cum ex fugiat!</p>
        </div>
        <div class="icono">
            <img src="build/img/icono3.svg" alt="Icono tiempo" loading="lazy">
            <h3>Tiempo</h3>
            <p>Lorem ipsum, dolor sit ames laborum, excepturi at expedita cum ex fugiat!</p>
        </div>
    </div>
</section>
<?php
incluirTemplate('footer');
?>