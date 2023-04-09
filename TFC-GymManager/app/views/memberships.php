<div class="memberships_panel_main">
    <h1>Cuotas</h1>
    
    
    <?php
    
        $USERDAO = new UserDAO(db_connection::connect());
                                    
        $session_user = new User();

        $session_user = $USERDAO->user_search_by_username($_SESSION['username']);
    ?>
    
    <h2> <?php echo $session_user->getDni() ?></h2>
</div>
