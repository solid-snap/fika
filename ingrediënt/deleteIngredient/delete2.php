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
                <li><a href="../createIngredient/create1.php">Maken</a></li>
                <li><a href="../readIngredient/read.php">Lezen</a></li>
                <li><a href="../updateIngredient/update1.php">Updaten</a></li>
                <li><a href="../deleteIngredient/delete1.php">Verwijderen</a></li>
                <li><a href="../searchIngredient/search1.php">zoeken</a></li>
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