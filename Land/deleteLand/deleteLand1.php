<!doctype html>
<html>
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
    <h1>Verwijder een land</h1>
    <?php
    require "../../dbConnect.php";
    $sql = $conn->prepare("SELECT * FROM Land");
    $sql->execute();
    $land= $sql->fetchAll();
    ?>
    <form action="deleteLand2.php" method="post">
        <label for="land">wat?</label>
        <select id="land" name="IdField">

            <?php
            foreach ($land as $l) {
                echo "<option value=" . $l['Id'] . ">" . $l['naam'] . "</option>";
            }
            ?>
        </select>
        <br>
        <input type="submit" value="verzenden">
</div>
</body>
</html>