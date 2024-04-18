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
            require "../../ingrediënt.php";

            // gegevens uit de array in variabelen stoppen
            $Id = $_POST["Id"];
            $naam = $_POST["naam"];


            //  object ---------------------------------------------------
            $ingrediënt = new ingrediënt($naam); //object maken
            $ingrediënt->update($Id);		           // verander tabel info en object info
            echo "This is the updated information: <br/>";
            echo $Id ."<br/>";
            $ingrediënt->afdrukken();
            ?>
         </div>
    </body>
</html>
