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

    </div>

</div>
