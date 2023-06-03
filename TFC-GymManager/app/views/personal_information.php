<div class="personal_information_container_main">
    <h1>Informacion personal</h1>

    <div class="personal_information_container">
        
        <div class="user_image">
            <?php if($session_user->getImage() == null): ?>
                <img src="app/assets/images/error.png" title="No tienes imagen"/>
            <?php else: ?>
                <img src="app/data/user_images/<?= $session_user->getImage() ?>" />
            <?php endif; ?>
        </div>

        <div class="user_info">
            <label>Nombre de usuario</label>
            <p><?= $session_user->getUsername() ?></p>
        </div>
        
        <div class="user_info">
            <label>Correo electrónico</label>
            <p><?= $session_user->getEmail() ?></p>
        </div>
        
        <div class="user_info">
            <label>Nombre</label>
            
            <p><?= $session_user->getFirst_name() ?></p>
        </div>

        <div class="user_info">
            <label>Apellidos</label>
            <p><?= $session_user->getLast_name() ?></p>
        </div>

        <div class="user_info">
            <label>Fecha de nacimiento</label>
            <p><?= $session_user->getDate_of_birth() ?></p>
        </div>

        <div class="user_info">
            <label>Género</label>
            <p><?= $session_user->getGender() ?></p>
        </div>

        <div class="user_info">
            <label>Número de teléfono</label>
            <p><?= $session_user->getPhone_number() ?></p>
        </div>
        
        <div class="user_info">
            <label>DNI</label>
            <p><?= $session_user->getDni() ?></p>
        </div>
        
        <h3>*Para solicitar cualquier cambio en los datos contacte con el centro deportivo</h3>

    </div>

</div>