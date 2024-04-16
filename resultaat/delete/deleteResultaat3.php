<!doctype html>
    <html>
    <head>
    </head>
    <body>
        <h1>Delete Resultaat</h1>
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
        </div>;
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
    </body>
</html>
