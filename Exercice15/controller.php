<?php
    require_once("functions.php");
    session_start();
    extract($_POST); 
    $_SESSION['N'] = $N; 
       
    // Si la taille de la matrice est correcte
    if(isset($N) && isset($envoi) && is_numeric($N) && $N>5 && $N<=100) {
        header("location:index.html.php?nn=1");
    }
    //Si on clique sur le bouton dessiner
    elseif(isset($dessiner) && is_numeric($N) && $N>5 && $N<=100){
        $_SESSION["color"] = $color;
        $_SESSION["position"] = $position;
        header("location:index.html.php?nn=2");
    }
    else
        header("location:index.html.php?nn=0"); 
    
    if(isset($suivant))
        header("Location:../Exercice16/index.html.php");
    if(isset($retour))
        header("Location:../Exercice14/index.html.php");
?>

