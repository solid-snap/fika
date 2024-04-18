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
                <li><a href="../create/createResultaat1.php">Maken</a></li>
                <li><a href="../delete/deleteResultaat1.php">Verwijderen</a></li>
                <li><a href="../read/readResultaat.php">Lezen</a></li>
                <li><a href="../update/updateResultaat1.php">Updaten</a></li>
            </ul>
        </div>
        <div class="content">
            <?php
            require "../../dbConnect.php";
            $sql = $conn->prepare("SELECT * FROM resultaat");
            $sql->execute();
            $resultaat= $sql->fetchAll();
            ?>
            <form action="updateResultaat2.php" method="post">
                <label for="resultaat">Wat wil je aanpassen?</label>
                <select id="resultaat" name="Id">
                    <?php
                    foreach ($resultaat as $i) {
                        echo "<option value=" . $i['Id'] . ">" . $i['Id'] .  "</option>";
                    }
                    ?>
                </select>
                <br>
                <input type="submit" value="verzenden">
            </form>
        </div>
    </body>
</html>