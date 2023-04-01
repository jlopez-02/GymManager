<!DOCTYPE html>
<html>
    <configuration>
        <system.webServer>
            <caching enabled="false" enableKernelCache="false" /> <!-- This one -->
        </system.webServer>
    </configuration>
    <head>
        <meta charset="UTF-8">
        <title>GymManager</title>

        <!--CDN-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

        <!--Styles-->
        <link rel="stylesheet" href="app/styles/css/reset.css"/> <!-- Reduce Browser inconsistencies-->
        <link rel="stylesheet" href="app/styles/css/normalize.css"/>
        <link rel="stylesheet" href="app/styles/css/root.css"/> <!-- Main CSS -->
    </head>
    <body>
        <div id="root">
            <header id="root_header">
                <nav id="nav_container">
                    <div id="logo-container">
                        <a href="#" class="app_logo">
                            GymManager
                        </a>
                    </div>

                    <div id="nav_menu">
                        <ul id="nav_list">
                            <li class="nav_item">
                                <a href="#" class="nav_link">Inicio</a>
                            </li>
                            <li class="nav_item">
                                <a href="#" class="nav_link">Noticias</a>
                            </li>
                            <li class="nav_item">
                                <a href="#" class="nav_link">Precios</a>
                            </li>
                            <li class="nav_item">
                                <a href="#" class="nav_link">Contacto</a>
                            </li>
                        </ul>
                    </div>

                    <div id="nav_buttons">
                        <div class="nav_button_container">
                            <a href="#" class="nav_button"><i id="login-logo" class="fa-solid fa-user"></i> Login</a>
                        </div>

                        <div class="nav_button_container">
                            <a href="index.php?action=register" class="nav_button">Register</a>
                        </div>

                        <div id="menu-icon"><i class="fa-solid fa-bars"></i></div>
                    </div>
                    

                </nav>
            </header>
            
            <main>
                <?php print $view; ?>
            </main>
            
        </div>
    </body>

    <script src="app/scripts/res_navbar.js"></script>
</html>
