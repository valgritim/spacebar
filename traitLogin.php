<?php

session_start();
var_dump($_SESSION['user']);
var_dump($_SESSION['message']);

if(isset($_POST['submit']) && !empty($_POST['submit'])){

    $user = $_POST['user'];
    $pwd = $_POST['pwd'];

//Recupération du fichier json des login et transformation en array pour traitement
    $json = file_get_contents('login.json');  
    $arrayJson = json_decode($json, true);
//Je vérifie si mes données sont enregistrée dans le tableau
    

    function search_for_value($needle1,$needle2, $haystack ) {
        
        foreach($haystack as $oneArray){
            if(in_array($needle1, $oneArray) && in_array($needle2, $oneArray)){
                $_SESSION['user'] = $needle1;            
                $role = $oneArray["role"];        
                $_SESSION['role'] = $role;
                
                                    
            } else { 
                echo"rien";
                            
            }
        }     
    }
    search_for_value($user,$pwd,$arrayJson);

        if(!isset($_SESSION['user'])){
            $_SESSION['error'] = "Votre email ou votre mot de passe est erroné.";
            header("Location: adios.php?mdp=ko");
        } else {
            $_SESSION['error'] = "";
            header("Location: index.php?mdp=ok"); 
        } 

        


}