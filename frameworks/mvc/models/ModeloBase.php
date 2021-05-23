<?php
require_once 'config/database.php';
class ModeloBase{
    public $db;

    public function __construct(){
        $this->db = database::conectar();

    }
    
    
    public function mostrarTodos($tabla){
        $query = $this->db->query("SELECT * FROM $tabla");
        return $query;
    }
    public function editar($tabla){
        $query = $this->db->query("SELECT * FROM $tabla");
        return $query;
    }
    public function eliminar($id){
        $resultado = $this->db->query("DELETE FROM usuarios WHERE id = '$id'");
        
    }
    public function modificar($id,$nombre,$apellido,$email){
			
        $resultado = $this->db->query("UPDATE usuarios SET nombre='$nombre', apellido='$apellido', email='$email' WHERE id = '$id'");			
    }
    public function get_usuario($id)
		{
			$sql = "SELECT * FROM usuarios WHERE id='$id' LIMIT 1";
			$query = $this->db->query($sql);
			$row = $query->fetch_assoc();

			return $row;
		}
    
 
}


?>