<?php
    class FontController{
        public function __construct() {}
        public function rutear() {
            $controller = (isset($_REQUEST['c'])) ? $_REQUEST['c']: 'Index' ;
            $action = (isset($_REQUEST['a'])) ? $_REQUEST['a']:'index';
            $controller = strtolower($controller); //convierte a minuscula
            $controller = ucwords($controller) . "Controller"; //hace que la primera letra sea mayuscula y concatena
    
            require_once "controller/" .$controller .".php"; // require de la clase del controlador
    
            $controller = new $controller; // creacion del objeto controlador
            $controller->$action();
        }
    }
?>