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

            $Id = $_POST["IdField"];
            $delete = $_POST["deleteBox"];

            if ($delete == "ja") {
                echo "The Resultaatbeen deleted <br/>";
                $resultaat = new resultaat();
                $resultaat->deleteResultaat($Id);
            } else {
                echo "The Resultaat hasn't been deleted. <br/>";
            }
            ?>
        </div>
    </body>
</html>
