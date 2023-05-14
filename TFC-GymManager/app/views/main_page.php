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
                <div style="display: none" class="swiper-button-prev"></div>
                <div style="display: none" class="swiper-button-next"></div>
            </div>
        </div>


    </section>

    <div id="plan_container">

        <h1>Nuestros planes</h1>

        <div class="slide-container swiper">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">

                    <?php if (count($plans) > 0) : ?>

                        <?php foreach ($plans as $plan) : ?>

                            <div class="card swiper-slide">
                                <div class="image-content">
                                    <span class="overlay"></span>

                                    <div class="card-image">
                                        <img src="app/assets/images/suscription.png" alt="" class="card-img">
                                    </div>
                                </div>

                                <div class="card-content">
                                    <h2 class="name"><?= $plan->getName() ?></h2>
                                    <h3 class="price"><?= $plan->getPrice() ?>€</h3>
                                    <p class="description"><?= $plan->getMonthly_cycle() ?> meses</p>

                                    <a href="#" class="button">Más información</a>
                                </div>
                            </div>

                        <?php endforeach; ?>

                    <?php else : ?>

                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="app/assets/images/error.png" alt="" class="card-img">
                                </div>
                            </div>

                            <div class="card-content">
                                <h2 class="name">Sin planes</h2>
                                <p class="description">No hay planes disponibles</p>

                                <button class="button" disabled>Lo sentimos</button>
                            </div>
                        </div>

                    <?php endif; ?>


                </div>
            </div>

            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
        </div>

    </div>

    <div>
        <a id="up_button" href="index.php#root"><i class="fa-solid fa-up-long"></i></a>
    </div>
</div>

<?php

$view = ob_get_clean();

require 'app/views/root_page.php';

?>