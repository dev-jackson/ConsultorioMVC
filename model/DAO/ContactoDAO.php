<?php
    require_once 'model/Connection.php';
    require_once 'model/DTO/Contacto.php';

    class ContactoDAO{
        private $connec;

        public function __construct(){
            try{
                $this->connec = Connection::getConnection();
            }catch(Exception $e){
                echo $e->getMessage();
            }
        }
        public function crearContacto(Contacto $c){
            $sql = "INSERT INTO contacto(`nombre`,`correo`,`mensaje`,`id_usuario`) VALUES(?,?,?,?)";
            try{
                $preStm = $this->connec->prepare($sql);
                $preStm->execute(array(
                    $c->getNombre(),
                    $c->getCorreo(),
                    $c->getMensaje(),
                    $c->getIdUsuario() 
                ));
               
           }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        public function getContacto($iden){
            $sql = "SELECT * FROM contacto WHERE nombre= ?";
            try{
                $preStm = $this->connec->prepare($sql);
                $preStm->execute(array($iden));
                return $preStm->fetch(PDO::FETCH_ASSOC);
                
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
    }
?>