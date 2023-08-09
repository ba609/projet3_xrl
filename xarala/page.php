  
<?php

// session_start();
// if(!isset($_SESSION["username"])){
//    header("location:login.php");
// }
// else{
//     header("location:page.php");
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <style>
     #dec{
      
        float: right;
     }

     .bouton{
        border-radius: 10px;
        color: white;
        background-color: green;
        list-style: none;
        text-decoration: none;
     }
     h1{
        text-align: center;
     }


    </style>
   
</head>
<body >
    <h1>Bienvenue sur ma page </h1>
    <a  id="dec" class="btn btn-danger " href="login.php">Deconexion</a><br>
    <a  class="btn btn-success" href="client.php">afficher les clients</a> <br><br>
    <a  class="btn btn-success" href="produit.php">ajouter un produit</a> <br><br>
    <a  class="btn btn-success" href="afficher.php">afficher les produit</a> 
   
</body>
</html>