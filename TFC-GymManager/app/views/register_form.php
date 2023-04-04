<?php

ob_start();

?>

<div id="register_form_container_layout">
    <div id="register_form_container_main">

        <h1>Crea una cuenta y comienza tu progreso</h1>


        <div id="register_form_container">


            <div id="register_error_container">
                <div class="error_container"><?php error_message::show_message()?></div>
                    
            </div>


            <form id="register_form" method="post">
                <div id="register_form_layout">
                    <div class="form_box">
                        <label for="username" class="form_label">Nombre de usuario</label>
                        <input type="text" class="form_input" name="username" placeholder=" ">
                        
                    </div>

                    <div class="form_box">
                        <label for="email" class="form_label">Correo electrónico</label>
                        <input type="text" class="form_input" name="email" placeholder=" ">
                        
                    </div>

                    <div class="form_box password_container">
                        <label for="password" class="form_label">Contraseña</label>

                        <div class="password_container">
                            <input type="password" class="form_input" name="password" placeholder=" " id="register_password">
                            <i class="fa-solid fa-eye" id="show_register_password"></i>
                        </div>
                        
                    </div>

                    <div class="form_box password_container">
                        <label for="r_password" class="form_label">Repetir contraseña</label>

                        <div class="password_container">
                            <input type="password" class="form_input" name="r_password" placeholder=" " id="register_repeat_password">
                            <i class="fa-solid fa-eye" id="show_register_repeat_password"></i>
                        </div>

                    </div>


                    <div class="form_box">
                        <label for="first_name" class="form_label">Nombre</label>
                        <input type="text" class="form_input" name="first_name" placeholder=" ">
                        
                    </div>

                    <div class="form_box">
                        <label for="last_name" class="form_label">Apellidos</label>
                        <input type="text" class="form_input" name="last_name" placeholder=" ">
                        
                    </div>



                    <div class="form_box">
                        <label for="phone" class="form_label">Número de teléfono</label>
                        <input type="tel" class="form_input" name="phone" placeholder=" ">
                        
                    </div>

                    <div class="form_box">
                        <label for="gender" class="form_label">Género</label>
                        <select name="gender" class="form_input">
                            <option value="Male">Men</option>
                            <option value="Female">Women</option>
                        </select>

                    </div>

                    <div class="form_box">
                        <label for="birthdate" class="form_label">Fecha de nacimiento</label>
                        <input type="date" class="form_input no-placeholder" name="date_of_birth" placeholder="" required>
                    </div>

                    <div class="form_box">
                        <label for="birthdate" class="form_label">DNI (sin letra)</label>
                        <input type="number" class="form_input" name="date_of_birth" placeholder=" ">
                    </div>
                </div>
                <div id="submit_button_container">
                    <input type="submit" class="nav_sub_button" value="Register">
                </div>
                
            </form>
        </div>

        <div class="container signin">
            <p>Si ya dispones de una cuenta puedes iniciar sesión <a href="#">aquí</a>.</p>
        </div>
    </div>

</div>

<?php

$view = ob_get_clean();

require 'app/views/root_page.php';

?>