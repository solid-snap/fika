<!doctype html>
<html>
    <head>
    </head>
    <body>
        <h1>Delete Persoon</h1>
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
        $Id = $_POST["IdField"];
        $persoon = new persoon();
        $persoon->searchPersoon($Id);
        ?>
        <form action="deletePersoon3.php" method="POST">
            <!-- $id cant be changed -->
            <input type="hidden" name="IdField" value=" <?php echo $Id ?> ">
            <!-- 2x deleteBox  -->
            <input type="hidden" name="deleteBox" value="nee">
            <input type="checkbox" name="deleteBox" value="ja">
            <label for="deleteBox">Delete this Persoon.</label><br/><br/>
            <input type="submit"><br/><br/>
        </form>
    </body>
</html>


