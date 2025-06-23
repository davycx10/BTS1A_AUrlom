<?php
require_once("db_PPE.php");
session_start();

if (isset($_GET["choose"]) == true)
{
    $rech = $_GET["choose"];  
    $searchcrit = " where a.Nom like '%$rech%'";
  
}
else
{
$searchcrit = "";
}


?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>BTS 1 A</title>
    <link href="css/design.css" rel="stylesheet" />

    <script>
        // Fonction pour ajouter un article au panier
        function ajouterAuPanier(id) {
          // On demande au serveur d'ajouter l'article
          fetch('ajouter_au_panier.php?id=' + id)
            .then(response => response.text())
            .then(data => {
              if (data === "OK") {
                alert("Article ajouté au panier !");
              } else {
                alert("Erreur : " + data);
              }
            });
        
        }
    </script>

</head>

<body>
    
    <?php
    require_once("header.php");
    ?>

    <?php

    $sql = "select a.ID_ARTICLE as 'artid' , a.Nom as 'artnom', a.Description as 'artdesc',
     a.prix as 'artprix', a.Reference as 'artref', a.Configuration as 'artconf' ,
      m.Nom as 'marnom' from article a join marque m on a.ID_MARQUE = m.ID_MARQUE" . $searchcrit;




    $res = mysqli_query($conn, $sql);

    while (($row = mysqli_fetch_assoc($res)) == true) {
        $artid = $row["artid"];
        $artnom = $row["artnom"];
        $artdesc = $row["artdesc"];
        $artprix = $row["artprix"];
        $artref = $row["artref"];
        $artconf = $row["artconf"];
        $marnom = $row["marnom"];
    ?>

        <div class="article">
            <div class="gauche"><img src="Images/<?= $artid ?>.jpg" height=120 /></div>
            
            <div class="milieu">
                <div style="font-size : 18px; color : crimson"><?= $artnom ?></div>
                <div><?= $artdesc ?></div>
                <div><?= $artref ?></div>
                <div><?= $artconf ?></div>
            </div>

            <div class="droite">
                <div style="font-size : 32px"><?= $artprix ?> €</div>



                <div id="article-<?=$artid ?>">

                    <a href="#" onclick="ajouterAuPanier(<?=$artid ?>); return false;">
                      <img src='Logo/basket.png' height=36 />
                    </a>

                </div>


                
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