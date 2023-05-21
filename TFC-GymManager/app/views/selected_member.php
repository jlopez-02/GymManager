<div class="edit_user_container_main">
    <h1>Información del usuario <span><?= $user_to_edit->getUsername() ?></span> </h1>

    <div class="edit_user_container">
        
        <?php if($user_to_edit->getImage() == null) : ?>
            <div class="user_image" id="user_image_div">
                <img src="app/assets/images/error.png" title="Añade una imagen"/>
            </div>
        <?php else: ?>
            <div class="user_image" id="user_image_div">
                <img src="app/data/user_images/<?= $user_to_edit->getImage() ?>" title="Añade una imagen"/>
            </div>
        <?php endif; ?>
        
        
        <form class="edit_user_form" action="index.php?action=administrate&subpage=edit_user&user_id=<?= $user_to_edit->getId()?>" method="post">
            
            <div class="user_info">
                <label>Nombre</label>
                <input type="text" name="first_name" placeholder=" " value="<?= $user_to_edit->getFirst_name() ?>">
            </div>

            <div class="user_info">
                <label>Apellidos</label>
                <input type="text" name="last_name" placeholder=" " value="<?= $user_to_edit->getLast_name() ?>">
            </div>

            <div class="user_info">
                <label>Fecha de nacimiento</label>
                <input type="date" name="birthdate" class="birthdate_input" placeholder=" " value="<?= $user_to_edit->getDate_of_birth() ?>">
            </div>

            <div class="user_info">
                <label>Género</label>
                <select name="gender">
                    
                    <?php
                    
                        if($user_to_edit->getGender() == 'Male'){
                            print "<option selected value='Male'>Hombre</option>";
                            print "<option value='Female'>Mujer</option>";
                        }else{
                            print "<option value='Male'>Hombre</option>";
                            print "<option selected value='Female'>Mujer</option>";
                        }
                    
                    ?>
                </select>
            </div>

            <div class="user_info">
                <label>Número de teléfono</label>
                <input type="tel" name="phone_number" placeholder=" " value="<?= $user_to_edit->getPhone_number() ?>">
            </div>
            
            <div class="user_info">
                <label>DNI (sin letra)</label>
                <input type="number" name="dni" placeholder=" " value="<?= $user_to_edit->getDniNumber() ?>">
            </div>
            
            
            <div class="user_info">
                <label>Correo electrónico</label>
                <input type="text" name="email" placeholder=" " value="<?= $user_to_edit->getEmail() ?>">
            </div>
            
            <div class="user_info txtnotes">
                <label>Notas (opcional)</label>
                <textarea name="notes"><?= $user_to_edit->getNotes() ?></textarea>
            </div>
            
            <div class="submit_edit_user_form">
                <input type="submit" class="nav_sub_button" value="Guardar datos">
            </div>
            
        </form>
        
        <form action='index.php?action=change_image&user_id=<?= $user_to_edit->getId()?>' method="post" id="image_hidden_form" enctype="multipart/form-data">
            <input style="display: none" type="file" name="image" id="image_hidden_input" accept=".jpg, .gif, .png, .webp">
        </form>
        
    </div>
</div>
