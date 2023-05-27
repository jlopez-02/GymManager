<?php

ob_start();

?>

<div class="chief_control_panel_main">
    <h1>PÁGINA EN CONSTRUCCIÓN</h1>
    <img src="app/assets/images/construction.png"/>
</div>

<?php

$view = ob_get_clean();

require 'app/views/root_page.php';

?>