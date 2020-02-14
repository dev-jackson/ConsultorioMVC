<?php

    class Usuario{
        private $id_usuario;
        private $nombres;
        private $apellidos;
        private $clave;
        private $tipo_usuario;
    //getters
    public function getIdUsuario(){
        return $this->id_usuario;
    }
    public function getNombres(){
        return $this->nombres;
    }
    public function getApellidos(){
        return $this->apellidos;
    }
    public function getClave(){
        return $this->clave;
    }
    public  function getTipoUsuario(){
        return $this->tipo_usuario;
    }
    //setters
    public function setIdUsuario($id){
        $this->id_usuario = $id;
    }
    public function setNombres($nombres){
        $this->nombres = $nombres;
    }
    public function setApellidos($apellidos){
        $this->apellidos = $apellidos;
    }
    public function setClave($clave){
        $this->clave = password_hash($clave,PASSWORD_DEFAULT,['cost'=> 10]);
    }
    public function setTipoUsuario($tipo){
        $this->tipo_usuario = $tipo;
    }
}
?>