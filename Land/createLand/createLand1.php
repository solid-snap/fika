<!doctype html>
<html>
    <head>

        <link rel="stylesheet" href="../../style.css">
    </head>
    <body>
        <h1>Create Land</h1>
        <div class="sidebar">
            <div class="technologo">
                <a href="../../Index.php"><img src="../../Images/technolab.png" alt="TechnoLab"></a>
            </div>
            <ul>
                <li><a href="../createLand/createLand1.php">Maken</a></li>
                <li><a href="../deleteLand/deleteLand1.php">Verwijderen</a></li>
                <li><a href="../readLand/readLand.php">Lezen</a></li>
                <li><a href="../searchLand/searchLand1.php">Opzoeken</a></li>
                <li><a href="../updateLand/updateLand1.php">Updaten</a></li>
            </ul>
        </div>
        <div class="content">
            <h1>Maak een land aan</h1>
            <form action="createLand2.php" method="POST">
                <label for "landField">Vul een land in: </label>
                <input type="text" name="landField"></input>
                <br/>

                <input type="submit">
            </form>
        </div>
    </body>
</html>