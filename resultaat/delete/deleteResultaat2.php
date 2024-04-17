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
            $resultaat = new resultaat();
            $resultaat->searchResultaat($Id);
            ?>
            <form action="deleteResultaat3.php" method="POST">
                <!-- $id cant be changed -->
                <input type="hidden" name="IdField" value=" <?php echo $Id ?> ">
                <!-- 2x deleteBox  -->
                <input type="hidden" name="deleteBox" value="nee">
                <input type="checkbox" name="deleteBox" value="ja">
                <label for="deleteBox">Delete this werknemer.</label><br/><br/>
                <input type="submit"><br/><br/>
            </form>
        </div>
    </body>
</html>



