<!doctype html>
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
    <h1>Update Land</h1>
<form action="updateLand2.php" method="POST">
    <label for="Id">Id:</label>
    <input type="text" id = "Id" name="IdField">
    <input type="submit">
</form>
</div>
</body>
<html>
