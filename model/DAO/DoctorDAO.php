<?php
    require_once 'model/Connection.php';
    require_once 'model/DTO/Cita.php';
    class DoctorDAO{

        private $connec;
        public function __construct(){
            try{
                $this->connec = Connection::getConnection();
            }catch(Exception $e){
                echo $e->getMessage();
            }
        }
        public function setEstado($opc,$ci){
            $sql = "UPDATE cita SET estado=? WHERE ci= ?";
            try{
                $preStm = $this->connec->prepare($sql);
                $preStm->execute(array($opc,$ci));
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        

    }
?>