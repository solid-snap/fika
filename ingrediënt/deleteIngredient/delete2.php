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
            $Id = $_POST["Id"];
            $ingrediënt = new ingrediënt();
            $ingrediënt->search($Id);
            ?>

            <form action="delete3.php" method="post">
                <input type="hidden" name="Id" value=" <?php echo $Id ?> ">
                <!-- 2x verwijderBox om nee of ja door te kunnen geven -->
                <input type="hidden" name="deleteBox" value="nee">
                <input type="checkbox" name="deleteBox" value="ja">
                <label for="deleteBox">verwijder ingrediënt</label><br/><br/>
                <input type="submit"><br/><br/>
            </form>
        </div>
    </body>
</html>