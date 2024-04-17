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
            $Id = $_POST["IdField"];
            $persoon = new persoon();
            $persoon->searchPersoon($Id);
            ?>
            <form action="deletePersoon3.php" method="POST">
                <!-- $id kan niet worden veranderd -->
                <input type="hidden" name="IdField" value=" <?php echo $Id ?> ">
                <!-- 2x deleteBox  -->
                <input type="hidden" name="deleteBox" value="nee">
                <input type="checkbox" name="deleteBox" value="ja">
                <label for="deleteBox">Verwijder deze persoon.</label><br/><br/>
                <input type="submit"><br/><br/>
            </form>
        </div>
    </body>
</html>



