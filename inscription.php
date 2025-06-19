<?php
require_once("db_PPE.php");
session_start();

if (count($_GET) > 0) {
    $login = $_GET["login"];
    $pwd = $_GET["pwd"];
    $nom = $_GET["nom"];
    $prenom = $_GET["prenom"];

    $pwd_hash = password_hash($pwd, PASSWORD_DEFAULT);

    // Corriger l'ordre des colonnes et des valeurs
    $sql = "INSERT INTO utilisateurs (Nom, Prenom, Login, MDP) VALUES ('$nom', '$prenom', '$login', '$pwd_hash')";
    
    $res = mysqli_query($conn, $sql);

    if ($res) {
        header("Location: connexion.php");
        echo "";
        exit;
    } else {
        echo "Erreur : " . mysqli_error($conn);
    }
}
?>



<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>BTS 1 A - Inscription</title>
    <link href="css/design.css" rel="stylesheet" />


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#togglePassword').click(function() {
                var x = $('#pwd');
                if(x.attr("type") === "password"){
                    x.attr('type', 'text');
                } else {
                    x.attr('type', 'password');
                }
            });
        });
    </script>

</head>

<body>
    
    <?php
    require_once("header.php");
    ?>
    <form class="formulaire" action="" method="GET">
        <p><input type="text" name="login" placeholder="Entrez le login" /></p>

        <p><input type="text" name="nom" placeholder="Entrez votre nom" /></p>
        <p><input type="text" name="prenom" placeholder="Entrez votre prénom" /></p>
       
        <br>

    <div class="password-container">
    <input type="password" name="pwd" id="pwd" placeholder="Entrez le mot de passe" />
    <img src="Images/feather--eye.svg" id="togglePassword" alt="Afficher le mot de passe">
</div>

<br>

 <p><input type="submit" name="submit" value="Inscription" /></p>
    </form>

    <p><a href="inscription.php" target = "_blank" >Nouvel utilisateur ?</a></p>

    <!-- <p><a href="inscription.php"> Vous avez deja un compte ?</a></p> -->



    <?php
    require_once("footer.php");
    ?>






</body>

</html>