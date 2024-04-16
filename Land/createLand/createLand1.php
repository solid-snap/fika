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
                <li><a href="Landen">Land</a></li>
                <li><a href="Ingrediënt">Ingrediënten</a></li>
                <li><a href="Persoon">Personen</a></li>
                <li><a href="Resultaat">Resultaten</a></li>
            </ul>
        </div>
        <div class="content">
            <form action="createLand2.php" method="POST">
                <label for "NaamField">Naam: </label>
                <input type="text" name="NaamField"></input>
                <br/>

                <input type="submit">
            </form>
        </div>
    </body>
</html>