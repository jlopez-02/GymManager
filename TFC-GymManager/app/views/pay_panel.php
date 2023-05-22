<div class="edit_user_container_main">
    <h1>Realizar Subscripción</h1>

    <div class="edit_user_container">
        <form class="edit_user_form" action="index.php?action=my_profile&subpage=pay_panel" method="post">
            
            <div class="user_info">
                <label>Plan de subscripción</label>
                <select name="payplan">
                    
                    <?php foreach ($plan_list as $plan): ?>
                    
                        <option value='<?=$plan->getId() ?>'><?=$plan->getName() ?></option>
                    
                    <?php endforeach; ?>
                </select>
                <a id="link_to_plans" href="index.php#plan_container">Ver planes</a>
            </div>
            
            <div class="user_info">
                <label>Fecha de inicio del plan</label>
                <input type="date" class="start_date" name="start_date" placeholder=" " value="<?php echo date('Y-m-d'); ?>">
            </div>
            
            <div class="user_info submit_edit_user_form">
                <input id="pay_window_button" type="submit" value="Proceder con el pago"/>
            </div>
            
        </form>
        
    </div>
</div>