<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="../../Stylesheet.css">
    </head>
        <body>
        <h1>Delete Werknemers</h1>
        <div class="sidebar">
            <div class="technologo">
                <a href="../../index.php"><img src="../../Images/technolab.png" alt="TechnoLab"></a>
            </div>
            <ul>
                <li><a href="../../index.php">Home</a></li>
                <li><a href="../../Aanwezigheid_Crud">Aanwezigheid</a></li>
                <li><a href="../../Werknemers_Crud">Werknemers</a></li>
                <li><a href="../../veranderingen">Veranderingen</a></li>
            </ul>
        </div>
            <?php
            require "persoon.php";

            $Id = $_POST["IdField"];
            $delete = $_POST["deleteBox"];

            if ($delete == "ja") {
                echo "The Persoon has been deleted <br/>";
                $persoon = new persoon();
                $persoon->deletePersoon($Id);
            } else {
                echo "The Persoon hasn't been deleted. <br/>";
            }
            ?>
    </body>
</html>
