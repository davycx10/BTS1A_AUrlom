<?php
require_once("db_PPE.php");
session_start();

?>

<?php

    if (count($_GET)> 0)
    {
        $login = $_GET["login"];
        $pwd = $_GET["pwd"];

        $sql = "select * from utilisateurs where login ='" . $login . "'";
        $res = mysqli_query($conn, $sql);
        if (mysqli_num_rows($res) == 1)
        {
            $row = mysqli_fetch_assoc($res);
            $MDP = $row["MDP"];
            if (password_verify($login, $MDP) == true)
            {
                $_SESSION["ID"] = $row["ID_UTILISATEUR"];
                header('Location: index.php');
            }
            else
            {
                echo "Identifants incorrects";
            }
        }
        else
        {
            echo "Identifants incorrects";
        }

    }

?>


<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>BTS 1 A - Connexion</title>
    <link href="css/design.css" rel="stylesheet" />
</head>

<body>
    <?php
    require_once("header.php");
    ?>
    <form class ="formulaire" action="#" method="GET">
        <p><input type="text" name="login" placeholder="Entrez le login" /></p>
        <p><input type="text" name="pwd" placeholder="Entrez le password" /></p>
        <p class="submit"><input type="submit" name="submit" value="Connexion" /></p>
    </form>

    <p><a href="inscription.php">Nouvel utilisateur ?</a></p>


    <?php
    require_once("footer.php");
    ?>
</body>

</html>