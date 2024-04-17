<!DOCTYPE html>
<html lang="nl" xmlns="http://www.w3.org/1999/html">
<head>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
<h1>Read land</h1>
<div class="sidebar">
    <div class="technologo">
        <a href="../../Index.php"><img src="../../Images/technolab.png" alt="TechnoLab"></a>
    </div>
    <ul>
        <li><a href="Land">Landen</a></li>
        <li><a href="Ingrediënt">Ingrediënten</a></li>
        <li><a href="Persoon">Personen</a></li>
        <li><a href="Resultaat">Resultaten</a></li>
    </ul>
</div>
<div class="content">
<?php
require "../../land.php";
$land = new land();
$land->readLand();
?>
</body>
</div>
</html>

