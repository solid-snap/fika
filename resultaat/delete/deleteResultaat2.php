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
            $Id = $_POST["Id"];
            $resultaat = new resultaat();
            $resultaat->searchResultaat($Id);
            ?>
            <form action="deleteResultaat3.php" method="POST">
                <!-- $Id kan niet worden veranderd -->
                <input type="hidden" name="Id" value=" <?php echo $Id ?> ">
                <!-- 2x deleteBox  -->
                <input type="hidden" name="deleteBox" value="nee">
                <input type="checkbox" name="deleteBox" value="ja">
                <label for="deleteBox">Verwijderd dit Resultaat.</label><br/><br/>
                <input type="submit"><br/><br/>
            </form>
        </div>
    </body>
</html>



