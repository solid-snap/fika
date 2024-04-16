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


            // uitlezen vakjes van KlantenCreate1 -----
            $naam = $_POST["naam"];


            // maken object -------------------------------
            $ingrediënt = new ingrediënt($naam);
            $ingrediënt->create();

            // afdrukken object ---------------------------
            ?>
        </div>
    </body>
</html>

