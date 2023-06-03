<?php

ob_start();

?>

<div class="register_access_main">
    <div class="register_access_panel">
        
        <h1>Acceso al centro</h1>
        <?php if($last_access !== null): ?>
            <?php if($last_access->getType() == 'entrance'): ?>
                <h2>Salir del gimnasio <i class="fa-solid fa-arrow-right-from-bracket"></i></h2>
            <?php else: ?>
                <h2>Entrar al gimnasio <i class="fa-solid fa-arrow-right-to-bracket"></i></h2>
            <?php endif; ?>
        <?php else: ?>
            <h2>No ha entrado todavía al gimnasio</h2>
        <?php endif; ?>
        <div class="register_access_container">
            <div id="qr_button" class="qr_container">
                <?= $qrCodeImg ?>
            </div>
        </div>
    </div>
</div>


<?php

$view = ob_get_clean();

require 'app/views/root_page.php';

?>

