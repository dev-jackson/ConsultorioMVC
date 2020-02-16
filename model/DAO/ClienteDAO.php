<?php
    class ClienteDAO{
        
        private $connec;

        public function __construct(){
            try{
                $this->connec = Connection::getConnection();
            }catch(Exception $e){
                echo $e->getMessage();
            }
        }
        public function getCliente($id){
            $sql = "SELECT * FROM usuario WHERE id_usuario = ? ";
            try{
                $preStm = $this->connec->prepare($sql);
                $preStm->execute(array($id));
                return $preStm->fetch(PDO::FETCH_OBJECT);
            }catch(Exception $e){
                echo $e->getMessage();
            }
        }
        public function crearCita(Cita $c){
            $sql = "INSERT INTO cita(`ci`,`nombreApellido`,`fecha`,`observaciones`,`estado`,`id_usuario`) VALUES(?,?,?,?,?,?)";
           try{
                $preStm = $this->connec->prepare($sql);
                $preStm->execute(array(
                $c->getCi(),
                 $c->getNombreApellido(),
                 $c->getFecha(),
                 $c->getObervaciones(),
                 $c->getEstado(), 
                 $c->getIdUsuario() 
            ));
            
        }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        public function getCita($id){
            $sql = "SELECT * FROM cita WHERE ci= ? ";
            try{
                $preStm = $this->connec->prepare($sql);
                $preStm->execute(array($id));
                return $preStm->fetch(PDO::FETCH_ASSOC);
            }catch(Exception $e){
                echo $e->getMessage();
            }
        }
        public function getCitaAll($id){
            $sql = "SELECT * FROM cita WHERE id_usuario = ? ";
            try{
                $preStm = $this->connec->prepare($sql);
                $preStm->execute(array($id));
                return $preStm->fetchAll(PDO::FETCH_ASSOC);
            }catch(Exception $e){
                echo $e->getMessage();
            }
        }
        public function admgetCitalAll(){
            $sql = "SELECT * FROM cita";
            try{
                $preStm = $this->connec->prepare($sql);
                $preStm->execute();
                return $preStm->fetchAll(PDO::FETCH_ASSOC);
            }catch(Exception $e){
                echo $e->getMessage();
            }
        }

    }
?>