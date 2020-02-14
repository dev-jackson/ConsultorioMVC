<?
    require_once 'config/config.php';
    require_once 'model/DAO/UsuarioDAO.php';
    require_once 'model/DTO/Usuario.php';
    class UsuarioController{
         private $user;

        public function __construct(){
            $this->user= new UsuarioDAO();
        }
        public function registroUsuario(){
            $u = new Usuario();
            $u->setIdUsuario($_POST['uname']);
            $u->setNombres($_POST['nombre']);
            $u->setApellidos($_POST['apellido']);
            $u->setClave($_POST['lpassword']);
            $u->setTipoUsuario('C');
            $this->user->crearUsuario($u);
            
            require_once HEADER;
            require_once header("Location: index.php?");
            require_once FOOTER;
        }
    }
?>