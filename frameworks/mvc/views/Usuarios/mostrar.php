<div class="col-md-8 col-md-offset-1">
    <table class="table table-hover">
    <tr>
    <td>ID</td>
    <td>Nombre</td>
    <td>Apellido</td>
    <td>Correo</td>
    <td>Opciones</td>
    </tr>
    <?php
    while ($user = $resultUser->fetch_object()): ?>
    <tr>
    <td><?=$user->id?></td>
    <td><?=$user->nombre?></td>
    <td><?=$user->apellido?></td>
    <td><?=$user->email?></td>
    <td><a href="index.php?controller=UsuarioController&action=modificar&id=<?=$user->id?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
    <td><a href="index.php?controller=UsuarioController&action=eliminar&id=<?=$user->id?>"><span class="glyphicon glyphicon-trash"></span></a></td>
    </tr>
        <?php endwhile;
      
    ?>
    </table>

</div>
