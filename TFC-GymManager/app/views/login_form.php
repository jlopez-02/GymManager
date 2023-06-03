<?php

ob_start();

?>

<div class="form_container_layout">
    <div class="form_container_main">

        <h1>Inicia Sesión</h1>


        <div class="form_container">

            <form class="access_form" action="index.php?action=login" method="post">
                <div class="form_layout" id="login_form_layout">
                    <div class="form_box">
                        <label for="username" class="form_label">Usuario</label>
                        <input type="text" class="form_input" name="login_username" placeholder=" ">
                        
                    </div>

                    <div class="form_box password_container">
                        <label for="password" class="form_label">Contraseña</label>

                        <div class="password_container">
                            <input type="password" id="login_password_input" class="form_input" name="login_password" placeholder=" " >
                            <i class="fa-solid fa-eye" id="show_login_password"></i>
                        </div>
                        
                    </div>
                </div>
                <div id="submit_button_container">
                    <input type="submit" class="nav_sub_button" value="Iniciar Sesión">
                </div>
                
            </form>
        </div>
    </div>

</div>

<?php

$view = ob_get_clean();

require 'app/views/root_page.php';

?>