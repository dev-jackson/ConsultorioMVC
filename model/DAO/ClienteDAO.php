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
    }
?>