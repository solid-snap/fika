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
                <li><a href="../create/createpersoon1.php">Maken</a></li>
                <li><a href="../delete/deletePersoon1.php">Verwijderen</a></li>
                <li><a href="../read/readPersoon.php">Lezen</a></li>
                <li><a href="../search/searchPersoon1.php">Opzoeken</a></li>
                <li><a href="../update/updatePersoon1.php">Updaten</a></li>
            </ul>
        </div>
        <div class="content">
            <?php
            require "../../dbConnect.php";
            $sql = $conn->prepare("SELECT * FROM persoon");
            $sql->execute();
            $persoon= $sql->fetchAll();
            ?>
            <form action="updatepersoon2.php" method="post">
                <label for="persoon">Wie wil je hebben?</label>
                <select id="persoon" name="Id">
                    <?php
                    foreach ($persoon as $p) {
                        echo "<option value=" . $p['Id'] . ">" . $p['naam'] . "</option>";
                    }
                    ?>
                </select>
                <br>
                <input type="submit" value="verzenden">
            </form>
        </div>
    </body>
</html>
