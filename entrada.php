<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>
<main class="contenedor seccion contenido-centrado">
    <h1>Decoración de tu hogar</h1>

    <picture>
        <source srcset="build/img/destacada2.webp" type="image/webp">
        <source srcset="build/img/destacada2.jpg" type="image/jpeg">
        <img src="build/img/destacada2.jpg" alt="imagen de la propiedad" loading="lazy">
    </picture>
    <p class="info-meta">Escrito el: <span>20/10/2022</span> por: <span>Admin</span></p>
    <div class="resumen-propiedad">

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae cum eos blanditiis porro. Eum soluta
            ducimus enim reiciendis consequatur aspernatur. Aperiam delectus laudantium accusantium aliquid atque,
            accusamus nisi quod in?</p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam velit mollitia quo dolore, voluptatem
            totam repudiandae minima blanditiis. Consequatur quasi aliquam facilis sunt quo repudiandae impedit illo
            incidunt, corrupti quod!</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae cum eos blanditiis porro. Eum soluta
            ducimus enim reiciendis consequatur aspernatur. Aperiam delectus laudantium accusantium aliquid atque,
            accusamus nisi quod in?</p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam velit mollitia quo dolore, voluptatem
            totam repudiandae minima blanditiis. Consequatur quasi aliquam facilis sunt quo repudiandae impedit illo
            incidunt, corrupti quod!</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae cum eos blanditiis porro. Eum soluta
            ducimus enim reiciendis consequatur aspernatur. Aperiam delectus laudantium accusantium aliquid atque,
            accusamus nisi quod in?</p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam velit mollitia quo dolore, voluptatem
            totam repudiandae minima blanditiis. Consequatur quasi aliquam facilis sunt quo repudiandae impedit illo
            incidunt, corrupti quod!</p>
    </div>
</main>
<?php
incluirTemplate('footer');
?>