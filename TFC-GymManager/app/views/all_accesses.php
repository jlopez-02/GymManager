<div class="accesses_panel_main">

    <h1>Accesos</h1>

    <div class="accesses_panel_container">

        

        <div class="accesses_table_container">
            <div class="accesses_scroll">
                <table>
                    <thead>
                        <th>Usuario</th>
                        <th>Fecha</th>
                        <th>Entrada/Salida</th>
                    </thead>
                    <tbody>
                        <?php if (count($accesses_list) < 1) : ?>
                            <tr>
                                <td colspan="3">No hay accesos</td>
                            </tr>

                        <?php else : ?>
                            <?php foreach ($accesses_list as $access) : ?>
                            <?php $user = $USERDAO->user_search_by_id($access->getUser_id());?>
                            
                                <tr>
                                    <td><?= $user->getUsername(); ?></td>
                                    <td><?= $access->getTime(); ?></td>
                                    <?php if ($access->getType() == 'entrance') : ?>
                                        <td>Entrada</td>
                                    <?php else : ?>
                                        <td>Salida</td>
                                    <?php endif; ?>
                                </tr>
                            <?php endforeach; ?>

                        <?php endif; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
    