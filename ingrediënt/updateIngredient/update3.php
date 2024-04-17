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

            // gegevens uit de array in variabelen stoppen
            $Id = $_POST["Id"];
            $naam = $_POST["naam"];


            //  object ---------------------------------------------------
            $ingrediënt = new ingrediënt($naam); //object maken
            $ingrediënt->update($Id);		           // verander tabel info en object info
            echo "This is the updated information: <br/>";
            echo $Id ."<br/>";
            $ingrediënt->afdrukken();
            ?>
         </div>
    </body>
</html>
