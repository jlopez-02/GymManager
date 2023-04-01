<?php

ob_start();

?>

<div id="main_page_container">
    
    <section class="image_galery">
        <img src="app/assets/images/monster1.jpg">
        <img src="app/assets/images/monster2.jpg">
        <img src="app/assets/images/monster3.jpg">
        <img src="app/assets/images/monster4.jpg">
    </section>
    
</div>

<?php

    $view = ob_get_clean();
    
    require 'app/views/root_page.php';

?>