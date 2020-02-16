<?php
    class FontController{
        public function __construct() {}
        public function rutear() {
            $controller = (isset($_REQUEST['c'])) ? $_REQUEST['c']: 'Index' ;
            $action = (isset($_REQUEST['a'])) ? $_REQUEST['a']:'index';
            $controller = strtolower($controller); //convierte a minuscula
            $controller = ucwords($controller)."Controller"; //hace que la primera letra sea mayuscula y concatena
            if(strncmp($controller,'Usuario',6)===0){
                require_once "controller/funUsuario/".$controller.".php";
            }elseif(strncmp($controller,'Cliente',6)===0){
                require_once "controller/funCliente/".$controller.".php";
            }elseif(strncmp($controller,'Admin',3)===0){
                require_once "controller/funAdmin/".$controller.".php";
            }else{
                require_once "controller/" .$controller .".php"; // require de la clase del controlador   
            }
           
            $controller = new $controller; // creacion del objeto controlador
            $controller->$action();
        }
    }
?>