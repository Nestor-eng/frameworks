<?php

require_once 'ModeloBase.php';
class Usuario extends ModeloBase{
    public $nombre;
    public $apellido;
    public $email;
    public $id;

    public function __construct(){
        parent::__construct();
    }

    public function setId($id){
        $this->id = $id;
    }
    public function getId(){
        return $this->id;
        
    }
    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function setApellido($apellido){
        $this->apellido=$apellido;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function setEmail($email){
        $this->email=$email;
    }
    public function getEmail(){
        return $this->email;
    }

    public function Create(){
        $sql = "INSERT INTO usuarios(nombre,apellido,email) VALUES ('{$this->nombre}','{$this->apellido}','{$this->email}')";
        $guardado = $this->db->query($sql);
        return $guardado;
    }
    
}

?>