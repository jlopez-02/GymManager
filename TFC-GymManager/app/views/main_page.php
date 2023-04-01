<?php

ob_start();

?>

<div id="main_page_container">
    
    <h1 class="welcome_title">S2Fitness</h1>
    <p class="welcome_sub_title">Tomelloso - Ciudad Real</p>

    <section class="image_galery">
        <img src="app/assets/images/stock1.webp">
        <img src="app/assets/images/stock2.webp">
        <img src="app/assets/images/stock3.jpg">
    </section>
    
</div>

<?php

    $view = ob_get_clean();
    
    require 'app/views/root_page.php';

?>