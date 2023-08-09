<?php
include("bdd.php");
$pdo->prepare("DELETE FROM personne WHERE id=?")->execute([$idpers]);
header("location:page.php");

?>