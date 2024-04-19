<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="sidebar">
            <div class="technologo">
                <a href="Index.php"><img src="Images/technolab.png" alt="TechnoLab"></a>
            </div>
            <ul>
                <li><a href="Land">Landen</a></li>
                <li><a href="ingrediënt/ingredientIndex.php">Ingrediënten</a></li>
                <li><a href="persoon/persoonIndex.php">Personen</a></li>
                <li><a href="resultaat/resultaatIndex.php">Resultaten</a></li>
            </ul>
        </div>
        <div class="content">

            <?php
            require_once "resultaat.php";

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

