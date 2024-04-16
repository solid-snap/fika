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
        <li><a href="Land">Landen</a></li>
        <li><a href="Ingrediënt">Ingrediënten</a></li>
        <li><a href="Persoon">Personen</a></li>
        <li><a href="Resultaat">Resultaten</a></li>
    </ul>
</div>
<div class="content">
<?php
require "../../land.php";

$Id = $_POST["IdField"];
$delete = $_POST["deleteBox"];

if ($delete == "ja") {
    echo "The has been deleted <br/>";
    $land = new land();
    $land->deleteLand($Id);
} else {
    echo "The  hasn't been deleted. <br/>";
}
?>
</body>
</div>
</html>
