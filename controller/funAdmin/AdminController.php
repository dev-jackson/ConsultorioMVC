<?php

require_once './config/config.php';
require_once './model/DAO/DoctorDAO.php';
require_once './model/DAO/ContactoDAO.php';
    class AdminController{

        private $doc;
        private $cont;

        public function __construct(){
            $this->doc= new DoctorDAO();
            $this->cont=new ContactoDAO();
        }

        public function updateEstado(){
            $estad = $_REQUEST['es'];
            $ci= $_REQUEST['ci'];
            $this->doc->setEstado($estad,$ci);
            session_start();
            header("Location:index.php?c=Cliente&a=showCitas");
            
        }
        public function showContac(){
            $result;
            session_start();
            require_once LIB;
            if(isset($_SESSION['A'])){
                $result=$this->cont->getContactoAll();
                require_once HEADER;
                require_once 'view/dynamic/tablecontac.php';
                require_once FOOTER;
            }else{
                require_once HEADER;
                require_once 'view/static/contac.php';
                require_once FOOTER;
            }
        }
 

    }
?>