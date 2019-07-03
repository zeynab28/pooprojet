

<?php
require_once "Autoloader.php";
Autoloader :: register();
//include("testconnexion.php");
//include("nonBoursier.class.php");
class ServiceEtudiant{ 
    
  private $db_name;
  private $db_user;
  private $db_pass;
  private $db_host;
  private $pdo;

  public function __construct($db_name = 'projetPOO', $db_user = 'root', $db_pass = '28101996', $db_host = 'localhost')
  {
    $this->db_name = $db_name;
    $this->db_user = $db_user;
    $this->db_pass = $db_pass;
    $this->db_host = $db_host;
  }

  public function getPDO()
  {
    if ($this->pdo === null) {
      $pdo = new PDO('mysql:dbname=projetPOO;host=localhost', 'root', '28101996');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $this->pdo = $pdo;
    }
    return $this->pdo;
  }


    //INSERTION NON BOURSIER et etudiant
    public function addnonBoursier(nonBoursier $nonboursier){
        
        //appel a la fonction pour la connexion
        $con=new testconnexion;
        $bdd=$con->connect();
       
        //insere dans etudiant
        $req=$bdd->prepare("INSERT INTO `ETUDIANT`( `matricule`, `nom`, `prenom`, `email`, `telephone`, `date_de_naissance`)VALUES ( :matricule,:nom,:prenom,:email,:telephone,:date_de_naissance)");
        $req->bindValue(':matricule', $nonboursier->getMatricule(), PDO::PARAM_STR);
        $req->bindValue(':nom', $nonboursier->getNom(), PDO::PARAM_STR);
        $req->bindValue(':prenom', $nonboursier->getPrenom(), PDO::PARAM_STR);
        $req->bindValue(':email', $nonboursier->getEmail(), PDO::PARAM_STR);
        $req->bindValue(':telephone', $nonboursier->getTelephone(), PDO::PARAM_INT);
        $req->bindValue(':date_de_naissance', $nonboursier->getDat_naissance());
        $req->execute();


        //appel a la fonction pour retourner la nouvelle valeur de id etudiant


        $requete=$bdd->query("SELECT MAX(`id_etudiant`) AS id FROM `ETUDIANT`");
          while($reponse=$requete->fetch()){
         $id=$reponse["id"];
                }
          if(get_class($nonboursier)=='nonBoursier'){
      $requete= $bdd->prepare("INSERT INTO `non_boursier`(`id_etudiant`, `adresse`) VALUES (:id_etudiant,:adresse)");   
      $requete->bindValue(':id_etudiant',$id, PDO::PARAM_INT);
        $requete->bindValue(':adresse', $nonboursier->getAdresse(), PDO::PARAM_STR);
        $requete->execute();
   
      }
        }

  public function addBoursier(Boursier $boursier){

            $statut=$boursier->getStatut();
            
            $con=new testconnexion;
        $bdd=$con->connect();
        $req=$bdd->prepare("INSERT INTO `ETUDIANT`( `matricule`, `nom`, `prenom`, `email`, `telephone`, `date_de_naissance`)VALUES ( :matricule,:nom,:prenom,:email,:telephone,:date_de_naissance)");
        $req->bindValue(':matricule', $boursier->getMatricule(), PDO::PARAM_STR);
        $req->bindValue(':nom', $boursier->getNom(), PDO::PARAM_STR);
        $req->bindValue(':prenom', $boursier->getPrenom(), PDO::PARAM_STR);
        $req->bindValue(':email', $boursier->getEmail(), PDO::PARAM_STR);
        $req->bindValue(':telephone', $boursier->getTelephone(), PDO::PARAM_INT);
        $req->bindValue(':date_de_naissance', $boursier->getDat_naissance());
        $req->execute();


        $requete=$bdd->query("SELECT MAX(`id_etudiant`) AS id FROM `ETUDIANT`");
          while($reponse=$requete->fetch()){
         $id=$reponse["id"];
          }
          echo $statut;
                $requete= $bdd->prepare("INSERT INTO `boursier`(`id_etudiant`, `id_type`) VALUES (:id_etudiant,:id_type)");   
            $requete->bindValue(':id_etudiant',$id, PDO::PARAM_INT);
        if($statut=='Demi bourse'){
                $requete->bindValue(':id_type', 1, PDO::PARAM_INT);  
                $requete->execute();
        }else if($statut=='Bourse Complet') {
            $requete->bindValue(':id_type', 2, PDO::PARAM_INT);     
            $requete->execute();
        }
        }
        public function addLoger(Loger $loger){
            $con=new testconnexion;
            $bdd=$con->connect();
            $req=$bdd->prepare("INSERT INTO `ETUDIANT`( `matricule`, `nom`, `prenom`, `email`, `telephone`, `date_de_naissance`)VALUES ( :matricule,:nom,:prenom,:email,:telephone,:date_de_naissance)");
            $req->bindValue(':matricule', $loger->getMatricule(), PDO::PARAM_STR);
            $req->bindValue(':nom', $loger->getNom(), PDO::PARAM_STR);
            $req->bindValue(':prenom', $loger->getPrenom(), PDO::PARAM_STR);
            $req->bindValue(':email', $loger->getEmail(), PDO::PARAM_STR);
            $req->bindValue(':telephone', $loger->getTelephone(), PDO::PARAM_INT);
            $req->bindValue(':date_de_naissance', $loger->getDat_naissance());
            $req->execute();

            //Prenons l'id le plus grand
            $requete=$bdd->query("SELECT MAX(`id_etudiant`) AS id FROM `ETUDIANT`");
             while($reponse=$requete->fetch()){
             $id=$reponse["id"];
             }
            
            $requete= $bdd->prepare("INSERT INTO `chambre`( `id_batiment`, `nom chambre`) VALUES (:id_batiment,:nom_chambre)");
           // $requete->bindValue(':id_chambre',$id, PDO::PARAM_INT);
            $requete->bindValue(':id_batiment',$loger->getBatiment(), PDO::PARAM_INT);
            $requete->bindValue(':nom_chambre',$loger->getChambre(), PDO::PARAM_STR);
            $requete->execute();
            
            $requete=$bdd->query("SELECT MAX(`id_chambre`) AS i FROM `chambre`");
            while($reponse=$requete->fetch()){
            $i=$reponse["i"];
            }


            $requete= $bdd->prepare("INSERT INTO `loger`( `id_chambre`, `id_etudiant`) VALUES (:id_chambre,:id_etudiant)");
           // $requete->bindValue(':id_chambre',$id, PDO::PARAM_INT);
            $requete->bindValue(':id_chambre',$i, PDO::PARAM_INT);
            $requete->bindValue(':id_etudiant',$id, PDO::PARAM_STR);
            $requete->execute(); 
    }

    public function FindAll($etudiant){
      if($etudiant=='boursier'){
        $req=$this->getPDO()->query("SELECT* FROM $etudiant,ETUDIANT WHERE ETUDIANT.id_etudiant=boursier.id_etudiant");
      }
      elseif($etudiant=='non_boursier'){
       $req=$this->getPDO()->query("SELECT* FROM $etudiant,ETUDIANT   WHERE ETUDIANT.id_etudiant=non_boursier.id_etudiant");
      }
      elseif($etudiant=='loger'){
       $req= $this->getPDO()->query("SELECT* FROM $etudiant,ETUDIANT   WHERE ETUDIANT.id_etudiant=loger.id_etudiant");
      }
      return $req->fetchAll(PDO::FETCH_ASSOC);
      
  
    }

    public function  addChambre(Chambre $chambre)
  {
    $nom = $chambre->getNom_chambre();
    $bat = $chambre->getId_batiment();

    $req = $this->getPDO()->prepare("INSERT 
    INTO chambre (nom_chambre,id_batiment)
    VALUES (:nom_chambre,:id_batiment)");
    $req->execute(array('nom_chambre' => $nom, 'id_batiment' => $bat));
    return $req;
  }
  public function addBatiment(Batiment $bat)
  {
    $batiment = $bat->getNom_batiment();

    $req = $this->getPDO()->prepare("INSERT 
    INTO batiment
    VALUES (?)");
    $req->execute(array($batiment));
    return $req;
    
  }


    }
?>