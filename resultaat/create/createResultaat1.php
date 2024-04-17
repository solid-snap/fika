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
