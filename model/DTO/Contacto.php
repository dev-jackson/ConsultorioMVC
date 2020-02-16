<?php
    class Contacto{
        private $id_contacto;
        private $nombre;
        private $correo;
        private $mensaje;
        private $id_usuario;

        //getters
        public function getIdContacto(){
            return $this->id_contacto;
        }
        public function getNombre(){
            return $this->nombre;
        }
        public function getMensaje(){
            return $this->mensaje;
        }
        public function getCorreo(){
            return $this->correo;
        }
        public function getIdUsuario(){
            return $this->id_usuario;
        }
        //setters
        public function setIdContacto($id){
            $this->id_contacto = $id;
        }
        public function setNombre($nombre){
            $this->nombre = $nombre;
        }
        public function setMensaje($mensaje){
            $this->mensaje = $mensaje;
        }
        public function setCorreo($correo){
            $this->correo = $correo;
        }
        public function setIdUsuario($id_u){
            $this->id_usuario = $id_u;
        }
    }
?>