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
                require_once "../../resultaat.php";

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $persoonId = $_POST["persoonIdField"];
                    $landId = $_POST["landIdField"];
                    $ingredientId = $_POST["ingredientIdField"];

                    // maakt object
                    $resultaat = new resultaat($persoonId, $landId, $ingredientId);
                    $resultaat->createResultaat();
                }
                ?>
        </div>
    </body>
</html>

