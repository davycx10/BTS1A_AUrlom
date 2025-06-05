<?php
require_once("db_PPE.php");
session_start();

?>

<?php

    if (count($_GET)> 0)
    {
        $login = $_GET["login"];
        $pwd = $_GET["pwd"];
        $prenom = $_GET["prenom"];
        $prenom = $_GET["nom"];


        $pwd = password_hash($pwd, PASSWORD_DEFAULT);

        $sql = "insert into utilisateurs (Nom, Prenom, Login, MDP) values ('" . $login . "', '" . $pwd . "', '" . $prenom . "', '" . $nom . "')";
        $res = mysqli_query($conn, $sql);


    if (mysqli_query($conn, $sql)) {
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
        <p><input type="text" name="pwd" placeholder="Entrez le password" /></p>
        <p><input type="text" name="nom" placeholder="Entrez votre nom" /></p>
        <p><input type="text" name="prenom" placeholder="Entrez votre prénom" /></p>
        <p><input type="submit" name="submit" value="Inscription" /></p>

    </form>

    <p><a href="inscription.php" target = "_blank" >Nouvel utilisateur ?</a></p>


    <?php
    require_once("footer.php");
    ?>
</body>

</html>