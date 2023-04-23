<div class="member_administration_panel_main">
    <h1>Socios</h1>
    
    <div class="member_administration_panel">
        
        <div class="member_table_container">
            <table>
                <thead>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Usuario</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <th>Estado</th>
                    <th>Última factura</th>
                </thead>

                <tbody>
                    
                    <?php
                        for ($i = 0; $i < count($members); $i++) {
                            $member = new User();
                            $member = $members[$i];
                    ?>
                    
                        <tr>
                            <td><?= $member->getFirst_name()?></td>
                            <td><?= $member->getLast_name() ?></td>
                            <td><?= $member->getUsername() ?></td>
                            <td><?= $member->getEmail()?></td>
                            <td><?= $member->getPhone_number()?></td>
                            <?php if($member->getActive() == 0): ?>

                                <td>Alta</td>

                            <?php else: ?>

                                <td>Baja</td>


                            <?php endif;?>
                        </tr>
                    
                    <?php } ?>

                    <?php foreach ($members as $member): ?>
                    
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
        
        <div class="member_button_container">
            <a href="#">Registrar Cliente</a>
            
        </div>
        
    </div>
    
    
    
</div>

