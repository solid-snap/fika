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
$land = new land();
$land->searchLand($Id);
?>
<form action="deleteLand3.php" method="POST">
    <!-- $id cant be changed -->
    <input type="hidden" name="IdField" value=" <?php echo $Id ?> ">
    <!-- 2x deleteBox  -->
    <input type="hidden" name="deleteBox" value="nee">
    <input type="checkbox" name="deleteBox" value="ja">
    <label for="deleteBox">Delete this werknemer.</label><br/><br/>
    <input type="submit"><br/><br/>
</form>
</div>
</html>