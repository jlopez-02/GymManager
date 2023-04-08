<?php

ob_start();

?>

<div class="my_profile_panel_main">
    <h1>Mi perfil</h1>
    
    
</div>

<?php

$view = ob_get_clean();

require 'app/views/root_page.php';

?>