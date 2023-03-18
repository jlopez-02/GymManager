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

        <!--Styles-->
        <link rel="stylesheet" href="app/styles/css/reset.css"/> <!-- Reduce Browser inconsistencies-->
        <link rel="stylesheet" href="app/styles/css/root.css"/> <!-- Main CSS -->
    </head>
    <body>
        <div id="root">
            <header id="root_header">
                <nav id="nav_container">
                    <a href="#" class="app_logo">
                        GymManager
                    </a>

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
                            <a href="#" class="nav_button">Login</a>
                        </div>

                        <div class="nav_button_container">
                            <a href="index.php?action=register" class="nav_button">Register</a>
                        </div>
                    </div>
                    

                </nav>
            </header>
            
            <main>
                <?php print $view; ?>
            </main>
            
        </div>
    </body>
</html>
