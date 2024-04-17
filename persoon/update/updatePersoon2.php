<!doctype html>
<html>
    <head>
    </head>
    <body>
        <h1>Update Werknemers</h1>
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
        require "persoon.php";                    // needed to make an object
        $Id = $_POST["IdField"];
        $persoon = new persoon();                // makes object
        $persoon->searchPersoon($Id);

        // properties in variables
        $naam = $persoon ->get_naam();
        ?>

        <form action="updatepersoon3.php" method="post">
            <!-- $id cant be changed -->
            <input type="hidden" name="IdField" value="<?php echo strip_tags("$Id <br>"); ?>"><br>
            <input type="text" name="naamField" value="<?php echo strip_tags("$naam <br>"); ?>"><br>
            <input type="submit"><br>
        </form>
    </body>
</html>
