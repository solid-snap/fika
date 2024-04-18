<!DOCTYPE html>
<html lang="nl" xmlns="http://www.w3.org/1999/html">
<head>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>

<div class="sidebar">
    <div class="technologo">
        <a href="../../Index.php"><img src="../../Images/technolab.png" alt="TechnoLab"></a>
    </div>
    <ul>
        <li><a href="../createLand/createLand1.php">Maken</a></li>
        <li><a href="../deleteLand/deleteLand1.php">Verwijderen</a></li>
        <li><a href="../readLand/readLand.php">Lezen</a></li>
        <li><a href="../searchLand/searchLand1.php">Opzoeken</a></li>
        <li><a href="../updateLand/updateLand1.php">Updaten</a></li>
    </ul>
</div>
<div class="content">
    <h1>Alle landen</h1>
<?php
require "../../land.php";
$land = new land();
$land->readLand();
?>
</body>
</div>
</html>

