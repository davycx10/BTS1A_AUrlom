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
        echo "Compte créé avec succès !";
        header("Location: connexion.php");
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
</head>

<body>
    <?php
    require_once("header.php");
    ?>
    <form class="formulaire" action="" method="GET">
        <p><input type="text" name="login" placeholder="Entrez le login" /></p>

        <p><input type="password" name="pwd" placeholder="Entrez le password" />
        <button type="button" onclick="togglePassword()">👁️</button></p>

        <p><input type="text" name="nom" placeholder="Entrez votre nom" /></p>
        <p><input type="text" name="prenom" placeholder="Entrez votre prénom" /></p>
        <p><input type="submit" name="submit" value="Inscription" /></p>

    </form>

    <p><a href="inscription.php" target = "_blank" >Nouvel utilisateur ?</a></p>


    <?php
    require_once("footer.php");
    ?>



<script>
function togglePassword() {
    const pwdField = document.getElementById("pwd");
    if (pwdField.type === "password") {
        pwdField.type = "text";
    } else {
        pwdField.type = "password";
    }
}
</script>


</body>

</html>