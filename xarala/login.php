
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <!-- <link rel="stylesheet"  href="./build/css/demo.css"> -->
    <link rel="stylesheet"  href="./build/css/intlTelInput.css">
    <title>formulaire</title>
</head>
<body>

<?php
include("dba.php");
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $email= $_POST["email"];
        $pass1= $_POST["pass1"];
            if($email != "" && $pass1 != ""){
                //connexion de la base de donnee
             $req= $bdd->query("SELECT * FROM personne WHERE email ='$email' and  pass1 = '$pass1' ");
             $req =$req -> fetch();
            
                if($req['idpers'] != false){
                   header("location:page.php");
                }
                else{
                   echo "email ou mdp incorrect";
                }
            }

    }
?>
    <div class="container">
        <div class="message-card">
            <div class="logo-pic"> <img src="logo.png" > </div>
            <div class="tittle"><h1>Connectez-vous</h1></div>
           
            <form method="POST" action="">
               <input type="email" name="email" id="email" placeholder="Email" required>             
                <input type="password" name="pass1" id="pass1" placeholder="Mot de passe" required>
                 <button type="submit" name="connexion" id="connexion">Connexion </button>
                 <a href="register.php">Inscrivez-vous</a>
            </form>
            <div class="social-link">
                       
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter" ></i></a>
                <a href="#"><i class="fab fa-instagram" ></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-youtube" ></i></a>
                <a href="#"><i class="fab fa-periscope "></i></a>
          
           </div>
        </div>
    </div>
 
</body>
</html>