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

        public function validarUsuario($usermane,$pws){
            $has_pws = hash($pws,PASSWORD_DEFAULT,['cost' => 10]);
            $sql = "SELECT * FROM usuario WHERE username= ? and clave= ? ";
            try{
                $preStm = $this->connec->prepare($sql);
                $preStm->execute(array($usermane,$has_pws));
                $preStm->fetch(PDO::FETCH_ASSOC);
                if($preStm > 0){
                    return true;
                }else{
                    return flase;
                }
            }catch(Exception $e){
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
               $preStm->fecth(PDO::FETCH_ASSOC);
                if($preStm > 0){
                    return true;
                }else{
                    return false;
                }
           }catch(PDOException $e){
                echo $e->getMenssage();
            }
        }
    }
?>