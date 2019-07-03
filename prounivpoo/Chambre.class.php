<?php
require_once "Autoloader.php";
Autoloader::register();
class Chambre Extends Batiment{
    private $nom_chambre;
    public function __construct($nom_chambre="", $id_batiment=0){
        parent::__construct($id_batiment=0);
        $this->nom_chambre=$nom_chambre;
        $this->id_batiment=$id_batiment;
    }
        public function setNom_chambre($nom_chambre){
            $this->nom_bat=$nom_chambre;
        }
        public function getNom_chambre(){
            return $this->nom_chambre;
        }
}
?>