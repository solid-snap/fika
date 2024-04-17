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
            // gegevens uit de array in variabelen stoppen
            $Id = $_POST["IdField"];
            $persoonId = $_POST["persoonIdField"];
            $landId = $_POST["landIdField"];
            $ingredientId = $_POST["ingredientIdField"];
            //  object ---------------------------------------------------
            $resultaat = new resultaat($persoonId, $landId, $ingredientId); //  object
            $resultaat->updateResultaat($Id);		           // veranderd de tabel info en object info
            echo "Dit is het geupdaten resultaat: <br/>";
            echo $Id ."<br/>";
            $resultaat->afdrukken();	                       // prints object

            ?>
        </div>
    </body>
</html>

