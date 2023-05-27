<div class="finish_payment_subpage">
    <div class="finish_payment_main">
        <section class="payment_info">

            <div class="payment_info_item">
                <label for="plan_name">Plan escogido:</label>
                <h4><?= $plan_name ?></h4>
            </div>

            <div class="payment_info_item">
                <label for="plan_name">Precio:</label>
                <h4><?= $payment->getPrice() ?>€</h4>
            </div>

            <div class="payment_info_item">
                <label for="start_date">Fecha de inicio:</label>
                <h4><?= date('d/m/Y', strtotime($payment->getStart_date())) ?></h4>
            </div>
            <div class="payment_info_item">
                <label for="expiration_date">Fecha de finalización</label>
                <h4><?= date('d/m/Y', strtotime($payment->getExpiration_date())) ?></h4>
            </div>
        </section>
        <form action="index.php?action=my_profile&subpage=confirm_payment&new_payment_id=<?= $payment->getId() ?>" method="post">
            <section class="payment_confirmation_section">
                <div class="payment_confirmation_item">
                    <label for="credit_card">Tarjeta de crédito</label>
                    <input type="text">
                </div>
                <div class="payment_confirmation_item">
                    <label for="cvv">CVV</label>
                    <input type="text">
                </div>
            </section>
            <div style="text-align: center;">
                <input type="submit" value="Pagar ahora"/>
            </div>
            
        </form>

    </div>

</div>
