<!doctype html>
<html>
<head>
</head>
    <body>
    <h1>Create Persoon</h1>
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
        <form action="createPersoon2.php" method="POST">
            <label for "naamField">Naam: </label>
            <input type = "text" name = "naamField"></input>
            <br/>
            <input type="submit">
        </form>
    </body>
</html>
