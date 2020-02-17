<?php
    require_once './config/config.php';
    require_once './model/DAO/UsuarioDAO.php';
    require_once './model/DTO/Usuario.php';
    require_once './model/DAO/ContactoDAO.php';
    require_once './model/DTO/Contacto.php';
    class UsuarioController{
         private $user;
         private $cont;
        public function __construct(){
            $this->user= new UsuarioDAO();
            $this->cont= new ContactoDAO();
        }
        public function login(){
            $username = $_REQUEST['uname'];
            $password = $_REQUEST['lpassword'];
            $rest=$this->user->getUsuario($username);
            if(password_verify($password,$rest['clave'])){
                if($rest['tipo_usuario']=='C'){
                    session_start();
                    $_SESSION['C']=$rest['nombres'];
                    echo "t";
                }else{
                    session_start();
                    $_SESSION['A']=$rest['nombres'];
                    echo "t";
                }
            }else{
            echo "t";
            
            }  
        }
        public function validateUsuario(){
            $id= $_POST['username'];
            $res=$this->user->getUsuario($id);
            if($res){
                echo "";
            }else{
                echo "exist";
            }
        }
        public function registroUsuario(){
            try{
            $u = new Usuario();
            $u->setIdUsuario($_POST['uname']);
            $u->setNombres($_POST['nombre']);
            $u->setApellidos($_POST['apellido']);
            $u->setClave($_POST['lpassword']);
            $u->setTipoUsuario('C');
            $this->user->crearUsuario($u);
            session_start();
            $_SESSION['C']=$u->getNombres();
            require_once HEADER;
            require_once header("Location: index.php?");
            require_once FOOTER;
            }catch(Exception $e){
                echo $e->getMessage();
            }
        } 
        public function registroContacto(){
            try{
            $c = new Contacto();
            $c->setNombre($_POST['email']);
            $c->setCorreo($_POST['nombre']);
            $c->setMensaje($_POST['mensaje']);
            $c->setIdUsuario(null);
            $this->cont->crearContacto($c);
            $res=$this->cont->getContacto( $c->getNombre());
            if(isset($res['nombre'])){
                echo "t";
            }else{
                echo "f";
            }
            }catch(Exception $e){
                echo $e->getMessage();
            }
        }
        public function destroySession(){
            session_start();
            session_destroy();
            session_start();
            $_SESSION['O']="t";
            header("Location: index.php?");

        }
    }
?>