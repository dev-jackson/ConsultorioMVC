<?php
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
                $preStm > 0? return true: return false;
            }catch(Exception $e){
                echo $e->getMessage();
            }
        }

        public function crearUsuario(Usuario $u){
            $sql = "INSERT INTO usuario(username,nombres,apellidos,clave,tipo_usuario) VALUES(?,?,?,?,?)";
            try{
                $preStm = $this->connec->prepare($sql);
                $preStm->execute(array(
                    $u->getIdUsuario(),
                    $u->getNombres(),
                    $u->getApellidos(),
                    $u->getClave(),
                    $u->getTipoUsuario();
                ));
                $preStm->fecth(PDO::FETCH_ASSOC);
                $preStm > 0? return true:return false;
            }catch(Exception $e){
                echo $e->getMenssage();
            }
        }
    }
?>