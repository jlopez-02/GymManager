<?php

ob_start();

?>
<div id="register_form_container_layout">
    <div id="register_form_container_main">

        <h1>Crea una cuenta y comienza tu progreso</h1>


        <div id="register_form_container">


            <form id="register_form" method="post">
                <div id="register_form_layout">
                    <div class="form_box">
                        <input type="text" class="form_input" name="username" placeholder=" ">
                        <label for="username" class="form_label">Username</label>
                        <span class="form_line"></span>
                    </div>

                    <div class="form_box">
                        <input type="text" class="form_input" name="email" placeholder=" ">
                        <label for="email" class="form_label">Email</label>
                        <span class="form_line"></span>
                    </div>

                    <div class="form_box">
                        <input type="password" class="form_input" name="password" placeholder=" ">
                        <label for="password" class="form_label">Password</label>
                        <span class="form_line"></span>
                    </div>

                    <div class="form_box">
                        <input type="password" class="form_input" name="r_password" placeholder=" ">
                        <label for="r_password" class="form_label">Repeat Password</label>
                        <span class="form_line"></span>
                    </div>


                    <div class="form_box">
                        <input type="text" class="form_input" name="first_name" placeholder=" ">
                        <label for="first_name" class="form_label">First Name</label>
                        <span class="form_line"></span>
                    </div>

                    <div class="form_box">
                        <input type="text" class="form_input" name="last_name" placeholder=" ">
                        <label for="last_name" class="form_label">Last Name</label>
                        <span class="form_line"></span>
                    </div>



                    <div class="form_box">
                        <input type="tel" class="form_input" name="phone" placeholder=" ">
                        <label for="phone" class="form_label">Phone Number</label>
                        <span class="form_line"></span>
                    </div>

                    <div class="form_box">
                        <select name="gender" class="form_input">
                            <option value="Male">Men</option>
                            <option value="Female">Women</option>
                        </select>

                        <!--<input type="text" class="form_input" name="gender" placeholder=" ">-->
                        <label for="gender" class="form_label">Gender</label>
                        <span class="form_line"></span>
                    </div>

                    <div class="form_box">
                        <input type="date" class="form_input" name="date_of_birth" placeholder="DD-MM-YYYY">
                        <label for="birthdate" class="form_label">Date of Birth</label>
                        <span class="form_line"></span>
                    </div>
                </div>
                <input type="submit" class="nav_sub_button" value="Register">
            </form>
        </div>

        <div id="register_error_container">
            <div class="error_container">
                <?php error_message::show_message() ?>
            </div>
                
        </div>
    </div>
</div>

<?php

$view = ob_get_clean();

require 'app/views/root_page.php';

?>