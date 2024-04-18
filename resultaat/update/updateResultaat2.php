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
                require "../../resultaat.php";
                $Id = isset($_POST["Id"]) ? $_POST["Id"] : null;

                $resultaat = new resultaat(); // object maken
                $resultaat->searchResultaat($Id);

                // properties in variabel
                $persoonId = $resultaat->get_persoonId();
                $landId = $resultaat->get_landId();
                $ingredientId = $resultaat->get_ingredientId();

                ?>

                <form action="updateResultaat3.php" method="post">
                    <input type="hidden" name="IdField" value="<?php echo strip_tags("$Id <br>"); ?>">
                    <input type="text" name="persoonIdField" value="<?php echo strip_tags("$persoonId <br>"); ?>"><br>
                    <input type="text" name="landIdField" value="<?php echo strip_tags("$landId <br>"); ?>"><br>
                    <input type="text" name="ingredientIdField" value="<?php echo strip_tags("$ingredientId <br>"); ?>"><br>
                    <input type="submit"><br>
                </form>
            </div>
    </body>
</html>
