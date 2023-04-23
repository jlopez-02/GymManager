
<div class="memberships_panel_main">
    <h1>Cuotas</h1>
    
    <div class="memberships_panel">
        
        <div class="memberships_table_container">
            
            <table>
                <thead>
                    <th>Plan de suscripción</th>
                    <th>Precio</th>
                    <th>Ciclo mensual</th>
                    <th>Estado</th>
                </thead>

                <tbody>
                    
                    <?php
                        for ($i = 0; $i < count($plans); $i++) {
                            $plan = new PayPlan();
                            $plan = $plans[$i];
                    ?>
                    
                        <tr>
                            <td><?= $plan->getName() ?></td>
                            <td><?= $plan->getPrice() ?></td>
                            <td><?= $plan->getMonthly_cycle() ?></td>
                            <?php if($plan->getActive() == 0): ?>

                                <td>Inactivo</td>

                            <?php else: ?>

                                <td>Activo</td>


                            <?php endif;?>
                        </tr>
                    
                    <?php } ?>

                    <?php foreach ($plans as $plan): ?>
                    
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
        
        <div class="memberships_button_container">
            
            <a href="index.php?action=administrate&subpage=new_pplan">Crear nuevo plan</a>
            
        </div>
        
    </div>
    
</div>



