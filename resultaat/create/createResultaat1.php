<!doctype html>
<html>
<head>
</head>
    <body>
        <h1>Create Resultaat</h1>
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
        <form action="createResultaat2.php" method="POST">
            <label for="persoonIdField">persoonId: </label>
            <input type="text" name="persoonIdField"><br>
            <label for="landIdField">landId: </label>
            <input type="text" name="landIdField"><br>
            <label for="ingredientIdField">ingrediëntId: </label>
            <input type="text" name="ingredientIdField"><br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>
