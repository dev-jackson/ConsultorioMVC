<?php
    require_once 'model/Connection.php';
    require_once 'model/DTO/Usuario.php';
    class UsuarioDAO{
        
        private $connec;

        public function __construct(){
            try{
                $this->connec = Connection::getConnection();
            }catch(Exception $e){
                echo $e->getMessage();
            }
        }

        public function validarUsuario($usermane){
            $sql = "SELECT * FROM usuario WHERE id_usuario= ?";
            try{
                $preStm = $this->connec->prepare($sql);
                $preStm->execute(array($usermane));
                return $preStm->fetch(PDO::FETCH_ASSOC);
                
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }

        public function crearUsuario(Usuario $u){
            $sql = "INSERT INTO usuario(`id_usuario`,`nombres`,`apellidos`,`clave`,`tipo_usuario`) VALUES(?,?,?,?,?)";
            try{
                $preStm = $this->connec->prepare($sql);
                $preStm->execute(array(
                    $u->getIdUsuario(),
                    $u->getNombres(),
                    $u->getApellidos(),
                    $u->getClave(),
                    $u->getTipoUsuario() 
                ));
               
           }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        public function getUsuario($id){
            $sql = "SELECT * FROM usuario WHERE id_usuario= ? ";
            try{
                $preStm = $this->connec->prepare($sql);
                $preStm->execute(array($id));
                return $preStm->fetch(PDO::FETCH_ASSOC);
            }catch(Exception $e){
                echo $e->getMessage();
            }
        }
        public function getUsuarioCi($id){
            $sql = "SELECT * FROM usuario WHERE nombres= ? ";
            try{
                $preStm = $this->connec->prepare($sql);
                $preStm->execute(array($id));
                return $preStm->fetch(PDO::FETCH_ASSOC);
            }catch(Exception $e){
                echo $e->getMessage();
            }
        }
      
    }
?>