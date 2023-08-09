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
            <div class="tittle"><h1>S'inscrire</h1></div>
            <form action="traitement.php" method="post">
                <input type="text" name="nom" id="non" placeholder="Nom" required>
                <input type="text" name="prenom" id="prenom" placeholder="Prenom" required>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <input type="phone" name="phone" id="phone" placeholder="Telephone" required>
                <input type="password" name="pass" id="pass1" placeholder="Mot de passe" required>
                <input type="password" name="pass1" id="pass" placeholder="confirmer le mot de passe" required>
                 <button type="submit" name="inscrire" value="inscrire" id="inscrire">S'inscrire </button>
                <a href="login.php">connectez-vous</a>
            </form>
        </div>
    </div>
   
    <script src="./build/js/intlTelInput.js"> </script>
    <script>
       var input = document.querySelector("#phone");
       window.intlTelInput(input,{});
    </script>
    
</body>
</html>


