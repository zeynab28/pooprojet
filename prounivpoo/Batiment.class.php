<?php
require_once "Autoloader.php";
Autoloader::register();
class Batiment {
    private $id_batiment;
    private $nom_batiment;
    public function __construct($id_batiment=0, $nom_batiment=""){
     $this->id_batiment=$id_batiment;
     $this->nom_bat=$nom_batiment;
    }
    public function setId_batiment($id_batiment){
        $this->id_batiment=$id_batiment;
    }
    public function getId_batiment(){
        return $this->id_batiment;
    }
    public function setNom_batiment($nom_batiment){
        $this->nom_batiment=$nom_batiment;
    }
    public function getNom_batiment(){
        return $this->nom_batiment;
    }
}
?>