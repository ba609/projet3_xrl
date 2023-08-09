<?php

include("dba.php");
include("page.php");
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/teste.css">
    <!-- <link rel="stylesheet"  href="./build/css/demo.css"> -->
    <link rel="stylesheet"  href="./build/css/intlTelInput.css">
    <title>formulaire</title>
</head>
<body>
    <div class="container">
        <div class="message-card">
            <div class="logo-pic"> <img src="logo.png" > </div>
            <div class="tittle"><h1>Ajout Produit</h1></div>
            <form action="traitement.php" method="post">
                <input type="text" name="noms" id="noms" placeholder="Nom produit" required>
                <input type="text" name="libelle" id="libelle" placeholder="libelle produit" required>
                <input type="number" name="prix" id="prix" placeholder="prix" required>
                 <button type="submit" name="valider" value="valider" id="valider">valider </button>
                
            </form>
        </div>
    </div>
   
    <script src="./build/js/intlTelInput.js"> </script>
 


    
</body>
</html>


