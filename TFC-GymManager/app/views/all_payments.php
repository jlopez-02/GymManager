<div class="payments_panel_main">

    <h1>Pagos</h1>

    <div class="payments_container">

        

        <div class="payments_table_container">
            <div class="payments_scroll">
                <table>
                    <thead>
                        <th>Usuario</th>
                        <th>Importe pagado</th>
                        <th>Fecha del pago</th>
                        <th>Fecha de inicio</th>
                        <th>Fecha de fin</th>
                    </thead>
                    <tbody>
                        <?php if (count($payment_list) < 1) : ?>
                            <tr>
                                <td colspan="5">No hay pagos</td>
                            </tr>

                        <?php else : ?>
                            <?php foreach ($payment_list as $payment) : ?>
                            <?php $user = $USERDAO->user_search_by_id($payment->getUser_id());?>
                            
                                <tr>
                                    <td><?= $user->getUsername() ?></td>
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
    </div>
</div>