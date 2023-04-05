<?php

ob_start();

?>

<div id="main_page_container">
    
    <div id="title_page">
        <h1 class="welcome_title">S2Fitness</h1>
        <p class="welcome_sub_title">Tomelloso - Ciudad Real</p>

        <h3 class="hover_text">¡Entrena con nosotros!</h3>
        <section class="image_galery">
            <img src="app/assets/images/stock1.webp">
            <img src="app/assets/images/stock2.webp">
            <img src="app/assets/images/stock3.jpg">
        </section>

        
    </div>
    
    <section id="web_description_page">
        <h1>¿Quienes Somos?</h1>
        <img src="app/assets/images/s2fitness.png">
        <hr>
        <p id="web_description">S2Fitness es mucho más que solo un centro deportivo, es un espacio donde disfrutar de tu tiempo, de tus amigos y de todo lo que te hace sentir bien mientras consigues tus objetivos. Y para darte un motivo más también tenemos promociones especiales.</p>
        
    </section>

    <hr id="link_2">

    <section id="showcase_container">
        <h1>Nuestras Instalaciones</h1>

        <div id="slider-container" class="swiper-container">
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide"><img src="app/assets/images/stock1.webp"></div>
                    <div class="swiper-slide"><img src="app/assets/images/stock2.webp"></div>
                    <div class="swiper-slide"><img src="app/assets/images/stock3.jpg"></div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>

    
    </section>
    
    
</div>

<?php

    $view = ob_get_clean();
    
    require 'app/views/root_page.php';

?>