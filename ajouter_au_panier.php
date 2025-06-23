<?php
require_once("db_PPE.php");
session_start();

if (!isset($_SESSION["ID"])) {
    echo "Erreur : utilisateur non connecté";
    exit;
}

if (isset($_GET['id'])) {
    $idArticle = intval($_GET['id']);
    $idUser = $_SESSION["ID"];

    // Vérifie si l'article est déjà dans le panier
    $checkSql = "SELECT * FROM panier WHERE ID_UTILISATEUR = $idUser AND ID_ARTICLE = $idArticle";
    $checkRes = mysqli_query($conn, $checkSql);

    if (mysqli_num_rows($checkRes) == 0) {
        // Pas encore dans le panier → on ajoute
        $insertSql = "INSERT INTO panier VALUES (NULL, 1, $idUser, $idArticle)";
        mysqli_query($conn, $insertSql);
    }
    
    echo "OK";
} else {
    echo "Erreur : ID manquant";
}
