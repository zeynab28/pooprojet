<?php
class testconnexion {
function connect(){
    try{
     
       $connex = new PDO('mysql:host=localhost;dbname=projetPOO;charset=utf8', 'root', '28101996');
    }
     catch(PDOException $e){
        echo "$e->getMessage()";
    } 
    return $connex;
}}
?>