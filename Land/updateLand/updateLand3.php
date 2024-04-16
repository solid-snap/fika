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
        <li><a href="Land">Landen</a></li>
        <li><a href="Ingrediënt">Ingrediënten</a></li>
        <li><a href="Persoon">Personen</a></li>
        <li><a href="Resultaat">Resultaten</a></li>
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
echo "This is the updated information: <br/>";
echo $Id ."<br/>";
$land->afdrukken();                           // prints objects

?>
</body>
</div>
</html>