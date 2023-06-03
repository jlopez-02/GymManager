<div class="adm_form_main_container">
    <h1>Cuotas</h1>
    <div class="form_container">

        <form class="access_form" action="index.php?action=administrate&subpage=edit_pplan&plan_id=<?= $pplan->getId()?>" method="post">
            <div class="form_layout" id="login_form_layout">
                <div class="form_box">
                    <label for="plan_name" class="form_label">Nombre del plan</label>
                    <input type="text" class="form_input" name="plan_name" placeholder=" " value="<?= $pplan->getName() ?>">

                </div>

                <div class="form_box">
                    <label for="plan_price" class="form_label">Precio (€/mes)</label>
                    <input type="number" class="form_input" name="plan_price" placeholder=" " id="register_password" value="<?= $pplan->getPrice() ?>">
                </div>

                <div class="form_box">
                    <label for="plan_cycle" class="form_label">Ciclo de renovación</label>
                    <select name="plan_cycle" class="form_input">
                        <?php

                            for ($i = 1; $i <= 12; $i++) {

                                if($i == 1){
                                    if($pplan->getMonthly_cycle() == $i){
                                        print "<option selected value='1'>Cada mes</option>";
                                    }else{
                                        print "<option value='1'>Cada mes</option>";
                                    }
                                }else{
                                    if($pplan->getMonthly_cycle() == $i){
                                        print "<option selected value='" . $i . "'>Cada " . $i . " meses</option>";
                                    }else{
                                        print "<option value='" . $i . "'>Cada " . $i . " meses</option>";
                                    }
                                }

                            }

                        ?>

                    </select>
                </div>
            </div>
            <div class="submit_button_container">
                <input type="submit" class="nav_sub_button" value="Crear plan de suscripción">
            </div>

        </form>
    </div>
</div>