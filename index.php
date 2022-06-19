<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice Banque_POO</title>
</head>
<body>
   

<?php

    include("compteBancaire.php");
    include("titulaire.php");
    
    $titulaire1 = new Titulaire("Massoud", "SHAMS", "25/03/1996", "SCHILTIGHEIM");

    $compteBancaire1 = new CompteBancaire("Compte courant", 1500 , "€", $titulaire1); 
    $compteBancaire2 = new CompteBancaire("Compte épargne", 1250 , "€", $titulaire1); 
    
    $compteBancaire1 -> debiterCompte(20);
    $compteBancaire1 -> crediterCompte(20);
    $compteBancaire1->virementCompte(500, $compteBancaire2);
    
    echo $titulaire1 -> afficherComptes();



?>






</body>
</html>