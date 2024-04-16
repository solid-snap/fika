<!doctype html>
<html>
<head>
</head>
<body>
<h1>Create Resultaat</h1>
<div class="sidebar">
    <div class="technologo">
        <a href="../../index.php"><img src="../../Images/technolab.png" alt="TechnoLab"></a>
    </div>
    <ul>
        <li><a href="../../index.php">Home</a></li>
        <li><a href="../../Aanwezigheid_Crud">Aanwezigheid</a></li>
        <li><a href="../../Werknemers_Crud">Werknemers</a></li>
        <li><a href="../../veranderingen">Veranderingen</a></li>
    </ul>
</div>
<?php
require_once "../../resultaat.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $persoonId = $_POST["persoonIdField"];
    $landId = $_POST["landIdField"];
    $ingredientId = $_POST["ingredientIdField"];

    // create object
    $resultaat = new resultaat($persoonId, $landId, $ingredientId);
    $resultaat->createResultaat();
}
?>
    </body>
</html>

