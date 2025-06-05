<?php
require_once("db_PPE.php");
session_start();

$todel = $_GET["idpan"];
echo $todel;

$sql = "DELETE FROM panier WHERE ID_PANIER = '$todel'";
mysqli_query($conn, $sql);
header("Location: panier.php");
?>