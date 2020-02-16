<?php
    class Cita{
        private $id_cita;
        private $ci;
        private $fecha;
        private $observaciones;
        private $estado;
        private $id_usuario;
        private $nombreApellido;

        //getters
        public function getCi(){
            return $this->ci;
        }
        public function getIdCita(){
            return $this->$id_cita;
        }
        public function getNombreApellido(){
            return $this->nombreApellido;
        }
        public function getFecha(){
            return $this->fecha;
        }
        public function getObervaciones(){
            return $this->observaciones;
        }
        public function getEstado(){
            return $this->estado;
        }
        public function getIdUsuario(){
            return $this->id_usuario;
        }
        //setters
        public function setIdCita($id){
            $this->id_cita = $id;
        }
        public function setFecha($fecha){
            $this->fecha = $fecha;
        }
        public function setNombreApellido($nombreApellido){
            $this->nombreApellido = $nombreApellido;
        }
        public function setEstado($estado){
            $this->estado = $estado;
        }
        public function setObservaciones($observaciones){
            $this->observaciones = $observaciones;
        }
        public function setIdUsuario($id_u){
            $this->id_usuario = $id_u;
        }
        public function setCi($ci){
            $this->ci = $ci;
        }
    }
?>