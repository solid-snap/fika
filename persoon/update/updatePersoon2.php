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
            require "../../persoon.php";                    // gebruikt om object aan te maken
            $Id = isset($_POST["Id"]) ? $_POST["Id"] : null;
            $persoon = new persoon();                // maakt object
            $persoon->searchPersoon($Id);

            // properties naar variables
            $naam = $persoon ->get_naam();
            ?>

            <form action="updatepersoon3.php" method="post">
                <!-- $id kan niet worden veranderd -->
                <input type="hidden" name="IdField" value="<?php echo strip_tags("$Id <br>"); ?>"><br>
                <input type="text" name="naamField" value="<?php echo strip_tags("$naam <br>"); ?>"><br>
                <input type="submit"><br>
            </form>
        </div>
    </body>
</html>
