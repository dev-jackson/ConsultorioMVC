<?php

require_once './config/config.php';
require_once './model/DAO/ClienteDAO.php';
require_once './model/DTO/Cita.php';
require_once './model/DAO/UsuarioDAO.php';
require_once './model/DTO/Usuario.php';
    class ClienteController{
        private $user;
        private $cli;
        public function __construct(){
            $this->cli= new ClienteDAO();
            $this->user= new UsuarioDAO();
        }
        public function registerCita(){
            session_start();
            $c=new Cita();
            $c->setCi($_POST['ci']);
            $c->setNombreApellido($_POST['paciente']);
            $c->setFecha($_POST['date']);
            $c->setEstado("E");
            $c->setObservaciones($_POST['mensaje']);
            $res=$this->user->getUsuarioCI($_SESSION['C']);
            $c->setIdUsuario($res['id_usuario']);
            $this->cli->crearCita($c);
            $rest=$this->cli->getCita($c->getCI());
            if($rest['id_cita']){
                echo "t";
            }else{
                echo "f";
            }
        }
    }
?>