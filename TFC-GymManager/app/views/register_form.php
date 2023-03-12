<?php

ob_start();

?>

<div style="background: white" id="register_form_container_main">
    
    <div id="register_form_container">
        
        <form id="register_form">
            
            <div class="form_box">
                <label for="name">First Name</label>
                <input type="text" name="name">
            </div>
            
            
            
        </form>
        
    </div>
    
</div>

<?php

    $view = ob_get_clean();
    
    require 'app/views/root_page.php';

?>