<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<script type="text/javascript" src="form.js"></script>
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
  <link rel="stylesheet" type="text/css" href="test.css">
  <style>
    #carte{
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
		<div class="card" id="carte" >
			<div class="card-header">
				<h3>Insertion</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div>
			<div class="card-body">
            <form action="addbatiment.php" method="POST">
            <!--<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="number" name="id" class="form-control" placeholder=" id batiment"required/>
                    </div> -->
                    <div class="input-group form-group">
                    <div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-home"></i></span>
						</div>
						<input type="text" name="nom" class="form-control" placeholder=" Nom Batiment "required/>
                    </div>
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
if (  isset($_POST['valider']) && !empty($_POST['nom']) ) {

  $nombat=$_POST['nom'];
  
  
  //$etu=new Etudiant($matricule,$nom,$prenom,$email,$tel,$dat_naissance);
  //$test= new ControlEtudiant();
  $bat= new Batiment($nombat);
  
  $nob= new ServiceEtudiant();
  $nob->addBatiment($bat);
  //$test->addEtudiant($etu);

  }
  
     // }else{
    //  echo $statut;
      //}
  

  