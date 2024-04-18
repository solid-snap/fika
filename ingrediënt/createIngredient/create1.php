<!DOCTYPE html>
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
                <li><a href="create1.php">Maken</a></li>
                <li><a href="../readIngredient/read.php">Lezen</a></li>
                <li><a href="../updateIngredient/update1.php">Updaten</a></li>
                <li><a href="../deleteIngredient/delete1.php">Verwijderen</a></li>
                <li><a href="../searchIngredient/search1.php">zoeken</a></li>
            </ul>
        </div>
        <div class="content">
            <form action="create2.php" method="post">
                <label for="naam">naam:</label>
                <input type="text" id="naam" name="naam"><br>
                <input type="submit" value="verzenden">
            </form>
        </div>
    </body>
    <footer>
    </footer>
</html>

