<html>
    <head>
        <link rel="stylesheet" href="../../style.css">
    </head>
    <body>
        <div class="sidebar">

            <div class="technologo">
                <a href="index.php"><img src="../../Images/technolab.png" alt="TechnoLab"></a>
            </div>
            <ul>
                <li><a href="Land">Landen</a></li>
                <li><a href="Ingrediënt">Ingrediënten</a></li>
                <li><a href="Persoon">Personen</a></li>
                <li><a href="Resultaat">Resultaten</a></li>
            </ul>
        </div>
        <div class="content">
            <?php
            require "../../dbConnect.php";
            $sql = $conn->prepare("SELECT * FROM ingrediënt");
            $sql->execute();
            $ingredient= $sql->fetchAll();
            ?>
            <form action="delete2.php" method="post">
                <label for="ingredient">wat?</label>
                <select id="ingredient" name="Id">
                    <?php
                    foreach ($ingredient as $i) {
                        echo "<option value=" . $i['Id'] . ">" . $i['naam'] . "</option>";
                    }
                    ?>
                </select>
                <br>
                <input type="submit" value="verzenden">
            </form>
        </div>
    </body>
</html>