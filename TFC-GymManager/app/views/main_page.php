<?php

ob_start();

?>

<div style="background: white">
    
    <h1>HOLA</h1>
    
</div>

<?php

    $view = ob_get_clean();
    
    require 'app/views/root_page.php';

?>