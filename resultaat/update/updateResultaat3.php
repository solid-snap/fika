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
                <li><a href="../../land">Landen</a></li>
                <li><a href="../../ingrediënt">Ingrediënten</a></li>
                <li><a href="../../persoon">Personen</a></li>
                <li><a href="../../resultaat">Resultaten</a></li>
            </ul>
        </div>
        <div class="content">
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
        </div>
    </body>
</html>

