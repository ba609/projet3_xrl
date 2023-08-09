<?php
include("dba.php");


         // insertion dans la table client
if(isset($_POST["inscrire"])){
    $nom=$_POST["nom"];
    $prenom=$_POST["prenom"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $pass=$_POST["pass"];
    $pass1=$_POST["pass1"];

    $requete = $bdd->prepare("INSERT INTO personne VALUES(0, :nom, :prenom, :email, :phone, :pass, :pass1)");
    //$requete = $bdd->prepare("INSERT INTO personne VALUES(0, :email, :pass, :email, :phone, :pass, :pass1)");
    $requete->execute(
        array(
            "nom" => $nom,
            "prenom" => $prenom,
            "email" => $email,
            "phone" => $phone,
            "pass" => $pass,
            "pass1" => $pass1,
         )
        );
       header("location:login.php");
}

    // insertion dans la table produits

if(isset($_POST["valider"])){
    $noms=$_POST["noms"];
    $libelle=$_POST["libelle"];
    $prix=$_POST["prix"];
   // $DATE=$_POST["DATE"];
  

 $requetes = $bdd->prepare("INSERT INTO produit VALUES(0, :noms, :libelle, :prix)");
 $requetes->execute(
    array(
        "noms" => $noms,
        "libelle" => $libelle,
        "prix" => $prix,
       // "DATE" => $DATE,
       
     )
    );
   header("location:page.php");
}
?>
