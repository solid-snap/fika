<!DOCTYPE html>
<html lang="nl">
    <head>
    </head>
        <body>
        <h1>Read Persoon</h1>
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
                $persoon = new persoon();
                $persoon->readPersoon();
                ?>
    </body>
</html>

