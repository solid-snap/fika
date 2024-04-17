<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
<h1>Delete Werknemers</h1>
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
$land = new land();
$land->searchLand($Id);
?>
<form action="deleteLand3.php" method="POST">
    <!-- $id kan niet worden veranderd-->
    <input type="hidden" name="IdField" value=" <?php echo $Id ?> ">
    <!-- 2x deleteBox  -->
    <input type="hidden" name="deleteBox" value="nee">
    <input type="checkbox" name="deleteBox" value="ja">
    <label for="deleteBox">Dit land verwijderen?</label><br/><br/>
    <input type="submit"><br/><br/>
</form>
</div>
</html>