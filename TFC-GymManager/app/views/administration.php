<?php

ob_start();

?>

<div class="admin_panel_main">
    <div class="admin_panel">
        
        <h1>Panel de administración</h1>
        
        <div class="admin_nav_container">
            <ul id="admin_nav_list">
                
                <li class="nav_item">
                    <a href="index.php?action=administrate&subpage=member" class="nav_link">Socios</a>
                </li>
                <li class="nav_item">
                    <a href="index.php?action=administrate&subpage=memberships" class="nav_link">Cuotas</a>
                </li>
                <li class="nav_item">
                    <a href="index.php?action=administrate&subpage=payments" class="nav_link">Pagos</a>
                </li>
                <li class="nav_item">
                    <a href="index.php?action=administrate&subpage=accesses" class="nav_link">Accesos</a>
                </li>
            </ul>
        </div>
        
        
        
        <div class="activity_container">

            <?php include $view_admin;?>
        </div>
    </div>
    
    
    
</div>

<?php

$view = ob_get_clean();

require 'app/views/root_page.php';

?>