<!doctype html>
    <html>
    <head>
    </head>
    <body>
    <h1>Update Resultaat</h1>
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
        require "../../resultaat.php";                    // needed to make an object
        $Id = $_POST["IdField"];
        $resultaat = new resultaat();                // makes object
        $resultaat->searchResultaat($Id);

        // properties in variables
        $persoonId = $resultaat->get_persoonId();
        $landId = $resultaat-> get_landId();
        $ingredientId = $resultaat-> get_ingredientId();
        ?>

        <form action="updateResultaat3.php" method="post">
            <!-- $id cant be changed -->
            <input type="hidden" name="IdField" value="<?php echo strip_tags("$Id <br>"); ?>"><br>
            <input type="text" name="persoonIdField" value="<?php echo strip_tags("$persoonId <br>"); ?>"><br>
            <input type="text" name="landIdField" value="<?php echo strip_tags("$landId <br>"); ?>"><br>
            <input type="text" name="ingredientIdField" value="<?php echo strip_tags("$ingredientId <br>"); ?>"><br>
            <input type="submit"><br>
        </form>
    </body>
</html>
