<!doctype html>
    <html>
    <head>
    </head>
    <body>
        <h1>Update Persoon</h1>
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
            // gegevens uit de array in variabelen stoppen
            $Id = $_POST["IdField"];
            $naam = $_POST["naamField"];
            //  object ---------------------------------------------------
            $persoon = new persoon($naam); //  object
            $persoon->updatePersoon($Id);		           // changes the tableinfo and object info
            echo "This is the updated information: <br/>";
            echo $Id ."<br/>";
            $persoon->afdrukken();	                       // prints objects

            ?>
    </body>
</html>

