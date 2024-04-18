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
                <li><a href="../createIngredient/create1.php">Maken</a></li>
                <li><a href="../readIngredient/read.php">Lezen</a></li>
                <li><a href="../updateIngredient/update1.php">Updaten</a></li>
                <li><a href="../deleteIngredient/delete1.php">Verwijderen</a></li>
                <li><a href="../searchIngredient/search1.php">zoeken</a></li>
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
