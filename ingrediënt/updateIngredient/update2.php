<html>
    <head>
        <link rel="stylesheet" href="../../style.css">
    </head>
    <body>
        <div class="sidebar">
            <div class="technologo">
                <a href="index.php"><img src="../../Images/technolab.png" alt="TechnoLab"></a>
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
            require "../../ingrediënt.php";
            $Id = isset($_POST["Id"]) ? $_POST["Id"] : null;



            $ingrediënt = new ingrediënt(); // object maken
            $ingrediënt->search($Id);

            // properties in variabel
            $naam = $ingrediënt->get_naam();

            ?>

            <form action="update3.php" method="post">
                <input type="hidden" name="Id" value="<?php echo strip_tags("$Id <br>"); ?>">
                <input type="text" name="naam" value="<?php echo strip_tags("$naam <br>"); ?>"><br>
                <input type="submit"><br>
            </form>
        </div>
    </body>
</html>
