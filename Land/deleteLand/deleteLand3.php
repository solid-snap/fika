<!doctype html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
<h1>Delete land</h1>
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
<?php
require "../../land.php";

$Id = $_POST["IdField"];
$delete = $_POST["deleteBox"];

if ($delete == "ja") {
    echo "Het land is verwijderd <br/>";
    $land = new land();
    $land->deleteLand($Id);
} else {
    echo "Het land is nog niet verwijderd. <br/>";
}
?>
</body>
</div>
</html>
