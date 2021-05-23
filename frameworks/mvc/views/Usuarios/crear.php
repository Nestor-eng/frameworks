<div class="panel panel-primary col-md-8 col-md-offset-2">
    <div class="panel-heading">
    Crear Usuarios
    </div>
    <div class="panel-body">
    <form action="index.php?controller=UsuarioController&action=guardar" method="POST" class="form-horizontal">
 <label class="control-label">Nombre</label>
 <input class="form-control" type="text" name="txtNombre">
 <label class="control-label">Apellido</label>
 <input class="form-control" type="text" name="txtApellido">
 <label class="control-label">Email</label>
 <input class="form-control" type="text" name="txtEmail">
 <hr>
 <button class="btn btn-warning" type="sumbit">Guardar</button>
</form>
    </div>
</div>

