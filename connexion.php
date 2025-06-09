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
    <form class ="formulaire" action="#" method="GET">
        <p><input type="text" name="login" placeholder="Entrez le login" /></p>

<br>
        <div class="password-container">
            <input type="password" name="pwd" id="pwd" placeholder="Entrez le mot de passe" />
            <img src="Images/feather--eye.svg" id="togglePassword" alt="Afficher le mot de passe">
        </div>

<br>


        <p class="submit"><input type="submit" name="submit" value="Connexion" /></p>
    </form>

    <p><a href="inscription.php">Nouvel utilisateur ?</a></p>


    <?php
    require_once("footer.php");
    ?>
</body>

</html>