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
            <form action="deletePersoon2.php" method="POST">
                <label for="Id">Id:</label>
                <input type="text" id="Id" name="IdField">
                <input type="submit">
                <br>
            </form>
        </div>
    </body>
</html>

