
<div class="adm_form_main_container">

    <h1>Cuotas</h1>

    <div class="form_container">

        <form class="access_form" action="index.php?action=administrate&subpage=new_pplan" method="post">
            <div class="form_layout" id="login_form_layout">
                <div class="form_box">
                    <label for="plan_name" class="form_label">Nombre del plan</label>
                    <input type="text" class="form_input" name="plan_name" placeholder=" ">

                </div>

                <div class="form_box">
                    <label for="plan_price" class="form_label">Precio (€/mes)</label>
                    <input type="number" class="form_input" name="plan_price" placeholder=" " id="register_password">
                </div>
                
                <div class="form_box">
                    <label for="plan_cycle" class="form_label">Ciclo de renovación</label>
                    <select name="plan_cycle" class="form_input">
                        <option value="1" selected>Cade mes</option>
                        <option value="2">Cada 2 meses</option>
                        <option value="3">Cada 3 meses</option>
                        <option value="4">Cada 4 meses</option>
                        <option value="5">Cada 5 meses</option>
                        <option value="6">Cada 6 meses</option>
                        <option value="7">Cada 7 meses</option>
                        <option value="8">Cada 8 meses</option>
                        <option value="9">Cada 9 meses</option>
                        <option value="10">Cada 10 meses</option>
                        <option value="11">Cada 11 meses</option>
                        <option value="12">Cada 12 meses</option>
                    </select>
                </div>
            </div>
            <div class="submit_button_container">
                <input type="submit" class="nav_sub_button" value="Crear plan de suscripción">
            </div>

        </form>
    </div>
</div>


