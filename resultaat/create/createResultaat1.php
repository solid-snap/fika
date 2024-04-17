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
            <form action="createResultaat2.php" method="POST">
                <label for="persoonIdField">persoonId: </label>
                <input type="text" name="persoonIdField"><br>
                <label for="landIdField">landId: </label>
                <input type="text" name="landIdField"><br>
                <label for="ingredientIdField">ingrediëntId: </label>
                <input type="text" name="ingredientIdField"><br>
                <input type="submit" value="Submit">
            </form>
        </div>
    </body>
</html>
