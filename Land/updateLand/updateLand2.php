<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
<h1>Update Werknemers</h1>
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
    <h1>Dit land updaten?</h1>

    <?php
require "../../land.php";                    // needed to make an object
$Id = $_POST["IdField"];
$land = new land();                // makes object
$land->searchLand($Id);

// properties in variables
$naam = $land->get_naam();

?>

<form action="updateLand3.php" method="post">
    <!-- $id cant be changed -->
    <input type="hidden" name="IdField" value="<?php echo strip_tags("$Id <br>"); ?>"><br>
    <input type="text" name="naamField" value="<?php echo strip_tags("$naam <br>"); ?>"><br>

    <input type="submit"><br>
</form>
</div>
</body>
</html>
