<!DOCTYPE html>
<html lang="es">
    <configuration>
        <system.webServer>
            <caching enabled="false" enableKernelCache="false" /> <!-- This one -->
        </system.webServer>
    </configuration>
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <title>S2Fitness</title>

        <!--CDN-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
        
        <!-- <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script> -->
        
        
        <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

        <!--Styles-->
        <link rel="stylesheet" href="app/styles/css/reset.css"/> <!-- Reduce Browser inconsistencies-->
        <link rel="stylesheet" href="app/styles/css/normalize.css"/>
        <link rel="stylesheet" href="app/styles/css/root.css"/> <!-- Main CSS -->
        <link rel="stylesheet" href="app/styles/css/swiper-bundle.min.css"/>

        

    </head>
    <body>
        <div id="root" >
            <header id="root_header">
                <nav id="nav_container">
                    <div id="logo-container">
                        <a href="index.php#root" class="app_logo">
                            S2Fitness
                        </a>
                    </div>

                    <div id="nav_menu">
                        <ul id="nav_list">
                            
                            <?php if(isset($_SESSION['user_id']) && isset($_SESSION['username'])): ?>
                             
                                <?php
                                    $USERDAO = new UserDAO(db_connection::connect());
                                    
                                    $session_user = new User();
                                    
                                    $session_user = $USERDAO->user_search_by_username($_SESSION['username']);
                                    
                                    if($session_user->getRole() == 'chief' || $session_user->getRole() == 'admin'){
                                
                                ?>
                            
                                    <li class="nav_item">
                                        <a href="index.php#root" class="nav_link">Inicio</a>
                                    </li>
                                    <li class="nav_item">
                                        <a href="index.php?action=administrate" class="nav_link">Administración</a>
                                    </li>
                                    
                                    <?php if($session_user->getRole() == 'chief') : ?>
                                    
                                        <li class="nav_item">
                                            <a href="index.php?action=chief_control" class="nav_link">Control</a>
                                        </li>
                                        
                                    <?php endif; ?>
                                    
                            
                                <?php } else if($session_user->getRole() == 'member'){ ?>
                                        <li class="nav_item">
                                            <a href="index.php#root" class="nav_link">Inicio</a>
                                        </li>
                                        <li class="nav_item">
                                            <a href="index.php#showcase_container" class="nav_link">Instalaciones</a>
                                        </li>
                                        <li class="nav_item">
                                            <a href="#" class="nav_link">Precios</a>
                                        </li>
                                        <li class="nav_item">
                                            <a href="index.php#go_aboutme" class="nav_link">Sobre Mi</a>
                                        </li>
                                <?php }else{ ?>
                                        <li class="nav_item">
                                            <a href="index.php#root" class="nav_link">Inicio</a>
                                        </li>
                                        <li class="nav_item">
                                            <a href="index.php#showcase_container" class="nav_link">Instalaciones</a>
                                        </li>
                                        <li class="nav_item">
                                            <a href="index.php#plan_container" class="nav_link">Precios</a>
                                        </li>
                                        <li class="nav_item">
                                            <a href="index.php#go_aboutme" class="nav_link">Sobre Mi</a>
                                        </li>
                                <?php } ?>
                                
                           
                                
                            
                            <?php else: ?>
                            
                                <li class="nav_item">
                                    <a href="index.php#root" class="nav_link">Inicio</a>
                                </li>
                                <li class="nav_item">
                                    <a href="index.php#showcase_container" class="nav_link">Instalaciones</a>
                                </li>
                                <li class="nav_item">
                                    <a href="index.php#plan_container" class="nav_link">Precios</a>
                                </li>
                                <li class="nav_item">
                                    <a href="index.php#go_aboutme" class="nav_link">Sobre Mi</a>
                                </li>
                                
                            <?php endif; ?>
                            
                        </ul>
                    </div>

                    <div id="nav_buttons">
                        <?php if(isset($_SESSION['user_id']) && isset($_SESSION['username']) ): ?>
                        
                            <div class="nav_button_container">
                                <a href="index.php?action=my_profile" class="nav_button">Mi Perfil</a>
                            </div>
                        
                            <div class="nav_button_container">
                                <a href="index.php?action=logout" class="nav_button">Cerrar Sesión</a>
                            </div>

                            <?php if($session_user->getRole() != 'user'): ?>
                                <div class="nav_button_container">
                                    <a href="index.php?action=access" class="nav_button" title="Entrar/Salir del Centro"><i id="access-icon" class="fa-solid fa-lock-open"></i></a>
                                </div>
                            <?php endif; ?>
                            
                        
                        <?php else: ?>
                            <div class="nav_button_container">
                                <a href="index.php?action=login" class="nav_button"><i id="login-logo" class="fa-solid fa-user"></i> Iniciar Sesión</a>
                            </div>

                            <div class="nav_button_container">
                                <a href="index.php?action=register" class="nav_button">Registrarse</a>
                            </div>
                            
                        <?php endif; ?>
                        
                        

                        <div id="menu-icon"><i class="fa-solid fa-bars"></i></div>
                    </div>
                    

                </nav>
            </header>

            <div class="popup">
                <div class="popup_content">
                    <div id="popup_warning_container">
                        <?php error_message::show_message()?>
                    </div>

                    <h5>De acuerdo</h5>
                </div>
            </div>
            
            <main>
                <?php print $view; ?>
            </main>
                    
        </div>
    </body>
    
    <!--Scripts-->
    <script src="app/scripts/aboutme.js"></script>
    <script src="app/scripts/access_form.js"></script>
    <script src="app/scripts/popup.js"></script>
    <script src="app/scripts/main_page.js"></script>
    <script src="app/scripts/res_navbar.js"></script>
    <script src="app/scripts/ajax_methods.js"></script>
    <script src="app/scripts/style.js"></script>
    <script src="app/scripts/swiper-bundle.min.js"></script>
    
</html>
