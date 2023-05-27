<div class="personal_payments_container_main">

    <h1>Pagos realizados</h1>

    <div class="personal_payments_container">

        <div class="personal_payments_table_container">
            <div class="personal_payments_scroll">
                <table>
                    <thead>
                        <th>Importe pagado</th>
                        <th>Fecha del pago</th>
                        <th>Fecha de inicio</th>
                        <th>Fecha de fin</th>
                    </thead>
                    <tbody>
                        <?php if(count($payment_list) < 1): ?>
                            <tr>
                                <td colspan="4">No has realizado ningúin pago</td>
                            </tr>
                        
                        <?php else: ?>
                            <?php foreach($payment_list as $payment): ?>
                            <tr>
                                <td><?= $payment->getPrice(); ?>€</td>
                                <td><?= $payment->getRecord_date(); ?></td>
                                <td><?= $payment->getStart_date(); ?></td>
                                <td><?= $payment->getExpiration_date(); ?></td>
                            </tr>
                            <?php endforeach; ?>
                        
                        <?php endif; ?>
                        
                    </tbody>
                </table>
            </div>
        </div>

        <div class="payment_button_container">
            <a href="index.php?action=my_profile&subpage=pay_panel">Subscribete a un plan</a>
        </div>

    </div>

</div>