<?php

 session_start();
 
if(!empty($_POST["submit"]) && isset($_POST["submit"])){
//Traitement données du formulaire
    $mdp = $_POST["pwd"];
    $user = $_POST["user"];
    $pseudo = $_POST["pseudo"];
    $role = 1;
    $_SESSION['username'] = $pseudo;
    $_SESSION['pwd'] = $mdp;
    $_SESSION['role'] = $role;

    $newRegister = ["email" => $user, "pseudo" => $pseudo, "mdp" => $mdp, "role" => $role];
   
//Ouverture fichier JSON et push des nouvelles données  
    $json = file_get_contents('login.json');  
    $tempArray = json_decode($json);    
    $tempArray[] = $newRegister;
    $jsonData = json_encode($tempArray);
    var_dump($jsonData);
    file_put_contents('login.json', $jsonData);

    header('Location: index.php');   
 
    
} else {

    header('Location:index.php');
}