<?php 
require_once('db_PPE.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BTS 1 Aurlom</title>
    <link href="css/design.css" rel="stylesheet" />
</head>
<body>

<?php require_once('header.php'); ?>

<?php 
$sql = "SELECT 
            a.ID_ARTICLE AS artid, 
            a.NOM AS artnom, 
            a.Description AS artdesc, 
            a.prix AS artprix ,
            a.Reference AS artref, 
            a.Configuration AS artconf, 
            m.Nom AS marnom 
        FROM article a 
        JOIN marque m ON a.ID_MARQUE = m.ID_MARQUE";

$result = mysqli_query($conn, $sql);

while (($row = mysqli_fetch_assoc($result)) == true) {
    $artid = $row['artid'];
    $artnom = $row['artnom'];
    $artdesc = $row['artdesc'];
    $artprix = $row['artprix'];
    $artref = $row['artref'];
    $artconf = $row['artconf'];
    $marnom = $row['marnom'];

?>
<div class="article">
    <div class="gauche" >AAA</div>
    <div class="millieu">BBB</div>
    <div class="droite">CCC</div>

</div>
<?= $artprix ?>



<?php 
} // ← fermeture propre de la boucle

// ✅ Ici tu es déjà dans du PHP, inutile de réouvrir avec <?php
mysqli_free_result($result);
?>

<h1>Huenco mundo</h1>




aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa

<?php 
require_once('footer.php'); 
?>



</body>
</html>

