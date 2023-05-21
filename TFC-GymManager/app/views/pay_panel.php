<div class="edit_user_container_main">
    <h1>Realizar Subscripción</h1>

    <div class="edit_user_container">
        <form class="edit_user_form" action="" method="post">
            
            <div class="user_info">
                <label>Plan de subscripción</label>
                <select name="gender">
                    
                    <?php foreach ($plan_list as $plan): ?>
                    
                        <option value='<?=$plan->getId() ?>'><?=$plan->getName() ?></option>
                    
                    <?php endforeach; ?>
                </select>
                <a id="link_to_plans" href="#">Ver planes</a>
            </div>
            
            <div class="user_info">
                <label>Fecha de inicio del plan</label>
                <input type="date" class="start_date" name="start_date" placeholder=" " value="">
            </div>
        </form>
        
    </div>
</div>