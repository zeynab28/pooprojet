<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<script type="/text/javascript" src="form.js"></script>
<!DOCTYPE html>
<html>
<head>
	<title>insérer contact</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
  <link rel="stylesheet" type="/text/css" href="test.css">
  <style>
    .card{
      margin-left: -450px;
      margin-top: 100px;
    }
    #text{
      font-family:fantasy;
      color: white;  
    }
    #menu{
      width: 5000px;
      height: 50px;
      text-align: center;
      margin-top: 100px;
    }
  </style>
</head>
<body>
  

<nav class="navbar navbar-expand-lg navbar-dark py-lg-4 py-2 bg-dark">
<ul class="navbar-nav mx-auto">
        
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="index.php">Ajouter <a>
          </li>

          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="findalletud.php">Rechercher</a>
          </li>
         
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="addchambre.php">Ajout chambre</a>
          </li>
          
        
        <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="addbatiment.php">Ajout batiment</a>
          </li>
          
        </ul>
     
  </nav>
  <div class="container">
	<div class="d-flex justify-content-center h-100">
    <h2 id="text" color=white>SONATEL ACADEMY UNIVERSITY</h2>
		<div class="card" >
			<div class="card-header">
				<h3>Insertion</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div>
			<div class="card-body">
            <form action="index.php" method="POST">
            <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" name="matricule" class="form-control" placeholder="Matricule"required/>
                    </div>
                    
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" name="nom"  size="20" class="form-control" placeholder="nom"required/>
                    </div>
                    
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" name="prenom" class="form-control" placeholder="prenom" size="20" required/>
                    </div>
                    
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-phone"></i></span>
						</div>
						<input type="number" name="number" class="form-control"  placeholder="Numero Telephone" required />
                    </div>

                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-envelope-square"></i></span>
						</div>
						<input type="text" name="email" class="form-control"  placeholder="email"  required />
                    </div>

                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-table"></i></span>
						</div>
						<input type="date" name="danaiss" class="form-control" placeholder="date de naissance"  required />
                    </div>

                    <input type="radio" name="opt_rad" id="nonBoursier" value="oui" onclick="showHideBourse()"/>Non Boursier
      <!--label for="nonBoursier"></label> <br-->
       <fieldset id="infoNonBoursier" >

      <label for="name">Adresse :</label>
      <input type="text" name="adresse" placeholder="adresse"> 
        
        </fieldset>  

        <input type="radio" name="opt_rad" id="Boursier" value="nom" onclick="showHideBourse()" />Boursier
        <fieldset id="infoBoursier" >

        <!--label for="name">Libelle:</label>
        <input type="text" name="libelle" id="libelle" placeholder="libelle"/-->

        <label for="statut">type de bourse</label> 
        <select name="statut"  size=1 >
          <optgroup>
            <option >Demi bourse</option>
            <option >Bourse Complet</option>
          </optgroup>
          </select> 
          </fieldset> <br> <br>
          
          <input type="radio" name="opt_rad" id="Loger" value="nom" onclick="showHideBourse()"/>Loger

          
            <fieldset id="infoLoger">
              
          <label for="name">Chambre :</label>
            <input type="text" name="chambre" id="libelle" placeholder="Chambre"/>
             

            <label for="batiment">batiment</label>
        <select name="batiment" id="batiment" size=1 >
          <optgroup>
            <option value="1">Pavillon 1</option>
            <option value="2">Pavillon 2</option>
            <option value="3">Pavillon 3</option>
            <option value="4">Pavillon 4</option> 
          </optgroup>
          </select> 
          </fieldset> 
        
        </label>
        </p>
        </li>
        <div class="form-group">
						<input type="submit" name="valider" value="Valider" class="btn float-right login_btn">
					</div>
				</form>
            </div>
            <?php

//include ("Etudiant.php");
require_once "Autoloader.php";
Autoloader :: register();

//inserer boursier
if (  isset($_POST['valider']) && !empty($_POST['adresse']) ) {

  $matricule=$_POST['matricule'];
  $prenom=$_POST['prenom'];
  $nom=$_POST['nom'];
  $email=$_POST['email'];
  $tel=$_POST['number'];
  $adresse=$_POST['adresse'];

  $dat_naissance=$_POST['danaiss'];
  //$etu=new Etudiant($matricule,$nom,$prenom,$email,$tel,$dat_naissance);
  //$test= new ControlEtudiant();
  $nb= new nonBoursier($matricule,$nom,$prenom,$email,$tel,$dat_naissance,$adresse);
  $nob= new ServiceEtudiant;
  $nob->addnonBoursier($nb);
  //$test->addEtudiant($etu);

  }
  if (  isset($_POST['statut']) && isset($_POST['valider'])) {
      //if($_POST['statut']="Demi Bourse"){
        $matricule=$_POST['matricule'];
        $prenom=$_POST['prenom'];
        $nom=$_POST['nom'];
        $email=$_POST['email'];
        $tel=$_POST['number'];
        //$adresse=$_POST['adresse'];
      
        $dat_naissance=$_POST['danaiss'];
        $statut=$_POST['statut'];
        $b= new Boursier($matricule,$nom,$prenom,$email,$tel,$dat_naissance,$statut);
        $bour= new ServiceEtudiant;
        $bour->addBoursier($b);
     // }else{
    //  echo $statut;
      //}
  }

  if (  isset($_POST['valider']) && !empty($_POST['chambre']) && isset($_POST['batiment']) ) {

    $matricule=$_POST['matricule'];
    $prenom=$_POST['prenom'];
    $nom=$_POST['nom'];
    $email=$_POST['email'];
    $tel=$_POST['number'];
    $chambre=$_POST['chambre'];
    $batiment=$_POST['batiment'];
   // $adresse=$_POST['adresse'];
    $dat_naissance=$_POST['danaiss'];

    $b= new Loger($matricule,$nom,$prenom,$email,$tel,$dat_naissance,$batiment,$chambre);
    $bour= new ServiceEtudiant;
    $bour->addLoger($b);

  }

?>

<script>

 document.getElementById('infoNonBoursier').style.display='none';
 document.getElementById('infoBoursier').style.display='none';
 document.getElementById('infoLoger').style.display='none';

 function showHideBourse(){
      if (document.getElementById('nonBoursier').checked){
        document.getElementById('infoNonBoursier').style.display='block';
        document.getElementById('infoBoursier').style.display='none';
       document.getElementById('infoLoger').style.display='none';
      }else if(document.getElementById('Boursier').checked) {
        document.getElementById('infoBoursier').style.display='block';
        document.getElementById('infoNonBoursier').style.display='none';
        document.getElementById('infoLoger').style.display='none';
      }

      else if(document.getElementById('Loger').checked){
        document.getElementById('infoLoger').style.display='block';
        document.getElementById('infoBoursier').style.display='none'; 
        document.getElementById('infoNonBoursier').style.display='none';
      }
 }
</script>
</body>