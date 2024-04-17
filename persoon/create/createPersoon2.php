<!doctype html>
<html>
<head>
</head>
    <body>
    <h1>Create Persoon</h1>
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

        $naam= $_POST ["naamField"];


        // maken object -------------------------------
        $persoon = new persoon($naam);
        $persoon ->createPersoon();

        // afdrukken object ---------------------------
        ?>
    </body>
</html>

