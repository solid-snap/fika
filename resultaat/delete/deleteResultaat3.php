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

            $Id = $_POST["IdField"];
            $delete = $_POST["deleteBox"];

            if ($delete == "ja") {
                echo "Het Resultaat is verwijderd. <br/>";
                $resultaat = new resultaat();
                $resultaat->deleteResultaat($Id);
            } else {
                echo "Het Resultaat is niet verwijderd. <br/>";
            }
            ?>
        </div>
    </body>
</html>
