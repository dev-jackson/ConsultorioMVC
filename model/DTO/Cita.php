<?php
    class Cita{
        private $id_cita;
        private $fecha;
        private $observaciones;
        private $id_usuario;

        //getters
        public function getIdCita(){
            return $this->$id_cita;
        }
        public function getFecha(){
            return $this->fecha;
        }
        public function getObervaciones(){
            return $this->observaciones;
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
        public function setObservaciones($observaciones){
            $this->observaciones = $observaciones;
        }
        public function setIdUsuario($id_u){
            $this->id_usuario = $id_u;
        }
    }
?>