<?php   
    require_once 'config/config.php';
    class IndexController{
        public function __construct(){

        }
        public function index(){
            require_once LIB;
            require_once HEADER;
            require_once 'view/inicio.php';
            require_once FOOTER;
        }
        public function static(){
            require_once LIB;
            $page = $_REQUEST['s'];
            require_once HEADER;
            require_once 'view/static/'.$page.'.php';
            require_once FOOTER;
        }
        public function dynamic(){
            require_once LIB;
            $page = $_REQUEST['d'];
            require_once HEADER;
            require_once 'view/dynamic/'.$page.'.php';
            require_once FOOTER;
        }
    }
?>