<?php
require_once("db_PPE.php");
session_start();

if (isset($_SESSION["ID"]) == false)
{
    header("Location: connexion.php");
}
?>

<?php

if (isset($_GET["id"]) == true)
{
    $id = $_GET["id"];
    $userid = $_SESSION["ID"];
    $sql = "select * from panier where ID_UTILISATEUR = $userid and ID_PANIER = $id";

    $res = mysqli_query($conn, $sql);
    if (mysqli_num_rows($res) == 0)
{
    $sqladd = "INSERT INTO panier VALUES (null,1,$userid,$id)";
    $res = mysqli_query($conn, $sqladd);

}


}



?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>BTS 1 A - Panier</title>
    <link href="css/design.css" rel="stylesheet" />
</head>
<body>

<?php require_once("header.php"); ?>

<?php
$sql = "select * from panier";
$iduser = $_SESSION["ID"] ;


$sql = "SELECT a.ID_ARTICLE as 'idart', a.NOM as 'nomart', a.REFERENCE as 'refart', a.prix as 'prixart', 
 p.ID_PANIER as 'idpan' from panier p join article a on 
p.ID_ARTICLE = a.ID_ARTICLE where ID_UTILISATEUR = '$iduser'";



$res = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($res)) {
    $idart = $row["idart"];
    $nomart = $row["nomart"];
    $refart = $row["refart"];
    $prixart = $row["prixart"];
    $idpan = $row["idpan"];

?>


        <div class="article">
            <div class="gauche"><img src="Images/<?= $idart ?>.jpg" height=120 /></div>
            
            <div class="milieu">
                <div style="font-size : 28px; color : crimson"><?= $nomart ?></div>
                <div style="font-size : 28px;"><?= $refart?></div>
                <div style="font-size : 28px;"><?= $prixart ?>€</div>
                
            </div>

            <div class="droite">
                <div style="font-size : 32px; color: red "> <a style="color: red" href="delpan.php?idpan=<?= $idpan ?>"> supprimer </a></div>
                
            </div>
        </div>



<?php
}

mysqli_free_result($res);
?>


    <?php
    require_once("footer.php");
    ?>

</body>
</html>
