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
        <link rel="stylesheet" href="../styles/css/reset.css"/> <!-- Reduce Browser inconsistencies-->
        <link rel="stylesheet" href="../styles/css/root.css"/> <!-- Main CSS -->
    </head>
    <body>
        <div>
            <header id="root_header">
                <nav id="nav_container">
                    <a href="#" class="app_logo">
                        GymManager
                    </a>

                    <div id="nav_menu">
                        <ul id="nav_list">
                            <li class="nav_item">
                                <a href="#" class="nav_link">Home</a>
                            </li>
                            <li class="nav_item">
                                <a href="#" class="nav_link">Plans</a>
                            </li>
                            <li class="nav_item">
                                <a href="#" class="nav_link">About</a>
                            </li>
                            <li class="nav_item">
                                <a href="#" class="nav_link">Contact</a>
                            </li>

                            <div class="nav_button_container">
                                <a href="#" class="nav_button">Login</a>
                            </div>

                            <div class="nav_button_container">
                                <a href="#" class="nav_button">Register</a>
                            </div>
                            
                        </ul>
                    </div>

                </nav>
            </header>
        </div>



    </body>
</html>
