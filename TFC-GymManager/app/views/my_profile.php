<?php

ob_start();

?>

<div class="my_profile_panel_main">

    <div class="my_profile_container">

        <h1>Mi perfil</h1>

        <div class="my_profile_nav_container">
            <ul>
                <li class="nav_item">
                    <a href="index.php?action=my_profile&subpage=personal_information" class="nav_link">Cuenta</a>
                </li>
                <li class="nav_item">
                    <a href="index.php?action=my_profile&subpage=personal_payments" class="nav_link">Pagos</a>
                </li>
            </ul>
        </div>

        <div class="my_profile_subpage_container">
            <?php include $view_admin;?>
        </div>

    </div>
    
    
    
</div>

<?php

$view = ob_get_clean();

require 'app/views/root_page.php';

?>