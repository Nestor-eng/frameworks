<div class="panel panel-primary col-md-8 col-md-offset-2">
    <div class="panel-heading">
    Editar Usuarios
    </div>
    <div class="panel-body">
    <form action="index.php?controller=UsuarioController&action=editar" method="POST" class="form-horizontal">
   
    <input type="hidden" id="id" name="id" value="<?php echo $data["id"]; ?>" />
    <script>console.log(<?php echo $data["id"]; ?>)</script>
 <label class="control-label">Nombre</label>
 <input class="form-control" type="text" name="txtNombre" value="<?php echo $data["usuario"]["nombre"]?>">
 <label class="control-label">Apellido</label>
 <input class="form-control" type="text" name="txtApellido" value="<?php echo $data["usuario"]["apellido"]?>">
 <label class="control-label">Email</label>
 <input class="form-control" type="text" name="txtEmail" value="<?php echo $data["usuario"]["email"]?>">
 <hr>
 <button class="btn btn-warning" type="sumbit">Actualizar</button>
</form>
    </div>
</div>
