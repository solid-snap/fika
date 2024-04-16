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
        require "../../resultaat.php";
        // gegevens uit de array in variabelen stoppen
        $Id = $_POST["IdField"];
        $persoonId = $_POST["persoonIdField"];
        $landId = $_POST["landIdField"];
        $ingredientId = $_POST["ingredientIdField"];
        //  object ---------------------------------------------------
        $resultaat = new resultaat($persoonId, $landId, $ingredientId); //  object
        $resultaat->updateResultaat($Id);		           // changes the tableinfo and object info
        echo "This is the updated information: <br/>";
        echo $Id ."<br/>";
        $resultaat->afdrukken();	                       // prints objects

        ?>
    </body>
</html>

