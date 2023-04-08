<?php

ob_start();

?>

<div class="chief_control_panel_main">
    <h1>Control de jefe</h1>
</div>

<?php

$view = ob_get_clean();

require 'app/views/root_page.php';

?>