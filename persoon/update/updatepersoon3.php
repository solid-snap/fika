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
            require "../../persoon.php";

            // gegevens uit de array in variabelen stoppen
            $Id = $_POST["IdField"];
            $naam = $_POST["naamField"];


            //  object ---------------------------------------------------
            $persoon = new persoon($naam); //object maken
            $persoon->updatePersoon($Id);		           // verander tabel info en object info
            echo "This is the updated information: <br/>";
            echo $Id ."<br/>";
            $persoon->afdrukken();
            ?>
        </div>
    </body>
</html>

