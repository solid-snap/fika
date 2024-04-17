<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
<h1>Update land</h1>
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
// gegevens uit de array in variabelen stoppen
$Id = $_POST["IdField"];
$naam = $_POST["naamField"];


//  object ---------------------------------------------------
$land = new land($naam); //  object
$land->updateLand($Id);                   // changes the tableinfo and object info
echo "Dit is de geüpdatet informatie: <br/>";
echo $Id ."<br/>";
$land->afdrukken();                           // prints objects

?>
</body>
</div>
</html>