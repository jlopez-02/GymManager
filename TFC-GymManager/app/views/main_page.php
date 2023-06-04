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

                                    <a href="index.php?action=my_profile&subpage=personal_payments" class="button">Subscribete</a>
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

    <div id="go_aboutme">
        <h1>Inicia sesión para poder pagar un plan</h1>
    </div>

    <div id="aboutme_container">
        <section id="aboutme_personal_section">
            <h1>¿Quien es el creador?</h1>
            <picture id="avatar_container">
                <img src="app/assets/images/aboutme_avatar.svg" />
            </picture>

            <div id="aboutme_description">
                <div id="aboutme_description_text">
                    <p>Hola, mi nombre es Juan y soy el creador de esta página web.
                        <br>Soy un estudiante de 21 años con muchas ganas de aprender y emprender nuevos proyectos en mi carrera profesional.
                    </p>

                    <p>Hace poco me gradué en Desarrollo de Aplicaciones Multiplataforma y actualmente estoy terminando mi segundo grado superior
                        con el objetivo de ampliar mis conocimientos.
                    </p>
                </div>
            </div>

            <div id="aboutme_skills">
                <div id="aboutme_skills_grid">
                    <div class="aboutme_card">
                        <div class="column-1">
                            <div class="card_title">
                                <h2>Educación</h2>
                                <picture>
                                    <img src="app/assets/images/books.svg" />
                                </picture>

                            </div>
                        </div>
                        <div class="column-2">
                            <div class="card_description">
                                <p>-Bachillerato Científico</p>
                                <p>-Desarrollo de Aplicaciones Multiplataforma</p>
                                <p>-Desarrollo de Aplicaciones Web</p>
                            </div>
                        </div>
                    </div>

                    <div class="aboutme_card">
                        <div class="column-1">
                            <div class="card_title">
                                <h2>Experiencia</h2>
                                <picture>
                                    <img src="app/assets/images/briefcase.svg" />
                                </picture>

                            </div>
                        </div>
                        <div class="column-2">
                            <div class="card_description">
                                <p>-CADE Soluciones Ingeniería</p>
                                <p>-NTT Data Europe & Latam</p>
                            </div>
                        </div>
                    </div>

                    <div class="aboutme_card">
                        <div class="column-1">
                            <div class="card_title">
                                <h2>Softskills</h2>
                                <picture>
                                    <img src="app/assets/images/heart-handshake.svg" />
                                </picture>

                            </div>
                        </div>
                        <div class="column-2">
                            <div class="card_description">
                                <p>-Excelente comunicación</p>
                                <p>-Trabajo en equipo</p>
                                <p>-Perseverancia</p>
                                <p>-Creatividad</p>
                            </div>
                        </div>
                    </div>

                    <div class="aboutme_card">
                        <div class="column-1">
                            <div class="card_title">
                                <h2>Hardskills</h2>
                                <picture>
                                    <img src="app/assets/images/brain.svg" />
                                </picture>

                            </div>
                        </div>
                        <div class="column-2">
                            <div class="card_description">
                                <p>-Desarrollo Frontend: HTML, CSS, Javascript, Booststrap</p>
                                <p>-Desarrollo Backend: Java, PHP, SQL</p>
                                <p>-Microsoft 365 Stack: SPFx, PowerApps</p>
                                <p>-Frameworks: React, Angular</p>
                            </div>
                        </div>
                    </div>

                    <div class="aboutme_card">
                        <div class="column-1">
                            <div class="card_title">
                                <h2>Idiomas</h2>
                                <picture>
                                    <img src="app/assets/images/language.svg" />
                                </picture>

                            </div>
                        </div>
                        <div class="column-2">
                            <div class="card_description">
                                <p>-Inglés avanzado</p>
                                <p>-Alemán básico</p>
                                <p>-Francés básico</p>
                                <p>-Italiano básico</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </div>

    <picture id="linkdin-logo">
        <a href="https://www.linkedin.com/in/juan-lopez-espinosa/" target="_blank"><img src="app/assets/images/link.png" /></a>
    </picture>


    <div>
        <a id="up_button" href="index.php#root"><i class="fa-solid fa-up-long"></i></a>
    </div>


</div>

<?php

$view = ob_get_clean();

require 'app/views/root_page.php';

?>