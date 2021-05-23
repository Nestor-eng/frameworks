<?php

class UsuarioController{
    public function crear(){
        require_once "views/usuarios/usuarios.php";	
        require_once 'views/usuarios/crear.php';
    }
    public function index(){
        require_once 'models/Usuario.php';	
			
        $usuario = new Usuario();
        require_once "views/usuarios/usuarios.php";	
    }
    public function guardar(){
        require_once "views/usuarios/usuarios.php";	
       require_once 'models/Usuario.php';
      
       $user = new Usuario();
       $user->setNombre($_POST['txtNombre']); 
       $user->setApellido($_POST['txtApellido']); 
       $user->setEmail($_POST['txtEmail']); 
       $guardar = $user->Create();
       
    }

    public function mostrarTodos(){
        require_once 'models/Usuario.php';
        require_once "views/usuarios/usuarios.php";	
        $user = new Usuario();
        $resultUser = $user->mostrarTodos('usuarios');
        require_once 'views/usuarios/mostrar.php';
        
    }
    public function buscarAEliminar(){
        require_once "views/usuarios/usuarios.php";	
        require_once 'models/Usuario.php';
        $user = new Usuario();
        $resultUser = $user->mostrarTodos('usuarios');
        require_once 'views/Usuarios/eliminar.php';
    }
   
    public function eliminar($id){
        require_once "views/usuarios/usuarios.php";	
        require_once 'models/Usuario.php';
        $user = new Usuario();
        $user->eliminar($id);
        echo '<script>'.$user->getId().'</script>';
    
        
    }
    public function modificar($id){
        require_once "views/usuarios/usuarios.php";	
		require_once 'models/Usuario.php';
        $user = new Usuario();	
        
        
        $data["id"] = $id;
        $data["usuario"] = $user->get_usuario($id);
        
        echo '<script>console.log('.$data["nombre"] = $user->getNombre().')</script>';
        require_once "views/usuarios/editar.php";
    }
    public function editar(){
        require_once "views/usuarios/usuarios.php";	
        require_once 'models/Usuario.php';
        $id = $_POST['id'];
        $nombre = $_POST['txtNombre'];
        $apellido = $_POST['txtApellido'];
        $email = $_POST['txtEmail'];

        $user = new Usuario();
        $user->modificar($id,$nombre,$apellido,$email);
      
    }


}



?>