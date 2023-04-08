<?php

ob_start();

?>

<div class="admin_panel_main">
    <div class="admin_panel">
        
        <h1>Panel de administración</h1>
        
        <div class="admin_nav_container">
            <ul id="admin_nav_list">
                
                <li class="nav_item">
                    <a href="index.php" class="nav_link">Miembros</a>
                </li>
                <li class="nav_item">
                    <a href="index.php" class="nav_link">Enlace 2</a>
                </li>
                <li class="nav_item">
                    <a href="index.php" class="nav_link">Enlace 3</a>
                </li>
            </ul>
        </div>
        
        
        
        <div class="activity_container">
            <?php include 'app/views/member_administration.php'; ?>
        </div>
    </div>
    
    
    
</div>

<?php

$view = ob_get_clean();

require 'app/views/root_page.php';

?>