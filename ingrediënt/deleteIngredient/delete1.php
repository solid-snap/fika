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
                <li><a href="../createIngredient/create1.php">Maken</a></li>
                <li><a href="../readIngredient/read.php">Lezen</a></li>
                <li><a href="../updateIngredient/update1.php">Updaten</a></li>
                <li><a href="../deleteIngredient/delete1.php">Verwijderen</a></li>
                <li><a href="../searchIngredient/search1.php">zoeken</a></li>
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