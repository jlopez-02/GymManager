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

                        <tr data-id="<?= $plan->getId() ?>">

                            <td><?= $plan->getName() ?></td>
                            <td><?= $plan->getPrice() ?>€</td>
                            <td><?= $plan->getMonthly_cycle() ?></td>
                            <?php if ($plan->getActive() == 0) : ?>

                                <td class="active_column" data-id="<?= $plan->getId() ?>">Inactivo
                                </td>

                            <?php else : ?>
                                <td class="active_column" data-id="<?= $plan->getId() ?>">Activo
                                </td>
                            <?php endif; ?>

                        </tr>

                    <?php } ?>



                </tbody>
            </table>
        </div>

        <div class="help_container">
            <p>*Puedes cambiar el estado pulsando en la columna correspondiente.</p>
            <p>*Para editar selecciona la fila que necesites.</p>
        </div>

        <div class="memberships_button_container">

            <a href="index.php?action=administrate&subpage=new_pplan">Crear nuevo plan</a>

        </div>

    </div>

</div>