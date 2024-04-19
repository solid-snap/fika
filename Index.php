<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="sidebar">

            <div class="technologo">
                <a href="Index.php"><img src="Images/technolab.png" alt="TechnoLab"></a>
            </div>
            <ul>
                <li><a href="Land/landIndex.php">Landen</a></li>
                <li><a href="ingrediënt/ingredientIndex.php">Ingrediënten</a></li>
                <li><a href="persoon/persoonIndex.php">Personen</a></li>
                <li><a href="resultaat/resultaatIndex.php">Resultaten</a></li>
            </ul>
        </div>
        <div class="content">
            <h1>Randomizer</h1>
            <button onClick="window.location.reload();">Re-spin</button>

            <?php
            require "dbConnect.php";

                $ingredient = $conn->prepare("SELECT * FROM ingrediënt ORDER BY RAND() LIMIT 1");
                $ingredient->execute();
                $rIngredient= $ingredient->fetchAll();

                $persoon = $conn->prepare("SELECT * FROM persoon ORDER BY RAND() LIMIT 1");
                $persoon->execute();
                $rpersoon= $persoon->fetchAll();

                $land = $conn->prepare("SELECT * FROM Land ORDER BY RAND() LIMIT 1");
                $land->execute();
                $rLand= $land->fetchAll();
            ?>
            <div class="randomizer">
                <form action="randomizer.php" method="post">
                    <label for="persoon">wie?</label>
                    <select id="persoon" name="persoonIdField">
                        <?php
                            foreach ($rpersoon as $rp) {
                                echo "<option value=" . $rp['Id'] . ">" . $rp['naam'] . "</option>";
                            }
                        ?>
                    </select>

                    <label for="ingredient">wat?</label>
                    <select id="ingredient" name="ingredientIdField">
                        <?php
                        foreach ($rIngredient as $ri) {
                            echo "<option value=" . $ri['Id'] . ">" . $ri['naam'] . "</option>";
                        }
                        ?>
                    </select>

                    <label for="land">waar?</label>
                    <select id="land" name="landIdField">
                        <?php
                        foreach ($rLand as $rl) {
                            echo "<option value=" . $rl['Id'] . ">" . $rl['naam'] . "</option>";
                        }
                        ?>
                    </select>
                    <input type="submit" value="verzenden">
                </form>
            </div>

        </div>
    </body>
</html>
