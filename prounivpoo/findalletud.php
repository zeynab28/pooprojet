<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
<style>
   
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark py-lg-4 py-2 bg-dark">
<ul class="navbar-nav mx-auto">
        
<li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="index.php">Ajouter <a>
          </li>

          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="findalletud.php">rechercher all etudiant</a>
          </li>

         
         
          
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="addchambre.php">Ajouter chambre</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="addbatiment.php">Ajouter batiment</a>
          </li>
          
        </ul>
     
  </nav>
  <form action="findalletud.php" method="POST">
  <div class="form-group row">
    
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" name="lister" placeholder="entrer le type de l'etudiant" style=width:50%>
    </div>
  </div>
  </form>
 
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary" name="rechercher">rechercher</button>
    </div>
    <div class="container">

             
    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
        <thead>
        
            <th>Matricule</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Email</th>
            <th>Telephone</th>
            <th>Date</th>
            <th>autres</th>
            </thead>
      <?php
      
   /* if(isset($_POST['rechercher'])){
        $serv = new controlEtudiant();
        $val=$_POST['lister'];
        echo"<table border=2>
        <thead>
        
            <th>Matricule</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Email</th>
            <th>Telephone</th>
            <th>Date</th>
            </thead>";




foreach($serv->FindBoursier($val) as $etu){
    echo  '<tr>
    <td>'.$etu->mat.'</td>'.
    '<td>'.$etu->nom.'</td>'.
    '<td>'.$etu->prenom.'</td>'.
    '<td>'.$etu->email.'</td>'.
    '<td>'.$etu->telephone.'</td>'.
    '<td>'.$etu->date_naissance.'</td>'.
    '<td>'.$etu->libellé.'</td>'.
    '<td>'.$etu->montant.'</td>';
    
    echo "</tr> ";
}
    }
    echo "</table>";*/

    

    require 'Autoloader.php'; 
    Autoloader::register(); 
if(isset($_POST['rechercher'])){
    $serv = new ServiceEtudiant();
        
       
    if($_POST['lister']=="boursier"){
        

foreach($serv->FindAll('boursier') as $key=>$etu){
    echo  '<tr>
    <td>'.$etu['matricule'].'</td>'.
    '<td>'.$etu['nom'].'</td>'.
    '<td>'.$etu['prenom'].'</td>'.
    '<td>'.$etu['email'].'</td>'.
    '<td>'.$etu['telephone'].'</td>'.
    '<td>'.$etu['date_de_naissance'].'</td>'.
    '<td>'.$etu['id_type'].'</td>';
    
    echo "</tr> ";
}
    }
}    

   

    


if(isset($_POST['rechercher'])){
    
    if($_POST['lister']=="non_boursier"){
        $nb = new ServiceEtudiant();
        
       
foreach($nb->FindAll('non_boursier') as $key=>$etu){
    echo  '<tr>
    <td>'.$etu['matricule'].'</td>'.
    '<td>'.$etu['nom'].'</td>'.
    '<td>'.$etu['prenom'].'</td>'.
    '<td>'.$etu['email'].'</td>'.
    '<td>'.$etu['telephone'].'</td>'.
    '<td>'.$etu['date_de_naissance'].'</td>'.
    '<td>'.$etu['adresse'].'</td>';
    
    echo "</tr> ";
}
    }
}    

    
    if(isset($_POST['rechercher'])){
    
        if($_POST['lister']=="loger"){
            $loge = new ServiceEtudiant();
    
    foreach($loge->FindAll('loger') as $key=>$etu){
        echo  '<tr>
        <td>'.$etu['matricule'].'</td>'.
        '<td>'.$etu['nom'].'</td>'.
        '<td>'.$etu['prenom'].'</td>'.
        '<td>'.$etu['email'].'</td>'.
        '<td>'.$etu['telephone'].'</td>'.
        '<td>'.$etu['date_de_naissance'].'</td>'.
        '<td>'.$etu['id_chambre'].'</td>';
        
        echo "</tr> ";
    }
        }
    }    
    
       
?>
 </table>
   
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script>
$(document).ready(function() {
    $('#datatable').DataTable();
} );
</script>
</body>


</html>