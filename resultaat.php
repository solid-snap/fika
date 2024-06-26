<?php
require_once "dbConnect.php";

class resultaat
{
    // properties
    public $persoonId;
    public $landId;
    public $ingredientId;

    // constructor
    function __construct($persoonId = NULL, $landId = NULL, $ingredientId = NULL)
    {
        $this->persoonId = $persoonId;
        $this->landId = $landId;
        $this->ingredientId = $ingredientId;
    }
// setters plaatsen waarde in object


    function set_persoonId($persoonId)
    {
        $this->persoonId = $persoonId;
    }

    function set_landId($landId)
    {
        $this->landId = $landId;
    }

    function set_ingredientId($ingredientId)
    {
        $this->ingredientId = $ingredientId;
    }

    // getters halen waarden van opbject op
    function get_persoonId()
    {
        return $this->persoonId;
    }

    function get_landId()
    {
        return $this->landId;
    }


    function get_ingredientId()
    {
        return $this->ingredientId;
    }

    public function afdrukken()
    {
        echo $this->get_persoonId();
        echo $this->get_landId();
        echo $this->get_ingredientId();
        echo "<br/>";
    }
// createResultaat-methode:
//voegt een nieuwe user toe aan de database
//Het haalt de waarden van de eigenschappen op en voert een SQL-invoegquery uit.
    public function createResultaat()
    {
        global $conn;

        // info van de objecten naar statements
        $persoonId = $this->get_persoonId();
        $landId = $this->get_landId();
        $ingredientId = $this->get_ingredientId();

        try {
            // voorbereid statement
            $sql = $conn->prepare("INSERT INTO resultaat (persoonId, landId, ingredientId) 
                                    VALUES (:persoonId, :landId, :ingredientId)");

            // verbind parameters
            $sql->bindParam(":persoonId", $persoonId);
            $sql->bindParam(":landId", $landId);
            $sql->bindParam(":ingredientId", $ingredientId);

            // print de execute uit
            $sql->execute();

            echo "Het is aangemaakt!";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
// deze methode wordt niet gebruikt
    public function readResultaat()
    {
        global $conn;
        // maakt statement
        $sql = $conn->prepare(" SELECT * FROM resultaat");
        $sql->execute();

        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>persoonId</th><th>landId</th><th>ingrediëntId</th></tr>";

        foreach ($sql as $resultaat) {

            echo "<tr>";

            echo "<td>" . $resultaat["Id"] . "</td>";
            echo "<td>" . $resultaat["persoonId"] . "</td>";
            echo "<td>" . $resultaat["landId"] . "</td>";
            echo "<td>" . $resultaat["ingredientId"] . "</td>";



            echo "</tr>";
        }


        echo "</table>";
        }

//searchResultaat-methode:
//Deze methode zoekt een  user op basis van $Werknemers_Id en toont de info
// Het voert een SQL-query uit met een parameter om de route te selecteren..
    public function searchResultaat($Id)
    {
        global $conn;
        // sql statement
        $sql = $conn->prepare("select * from resultaat
                               where Id = :Id");
        // variables naar statement
        $sql->bindParam(":Id", $Id);
        $sql->execute();
        // info van de array in het object en print het uit
        foreach ($sql as $resultaat) {
            echo $resultaat["Id"] . "<br>";
            echo $this->persoonId = $resultaat["persoonId"] . "<br>";
            echo $this->landId = $resultaat["landId"] . "<br>";
            echo $this->ingredientId = $resultaat["ingredientId"] . "<br>";
        }
    }
//deleteResultaat-methode:
//Deze methode verwijdert een user uit de database met een  gegeven id
// het voert een SQL-verwijderquery uit met een parameter om de route te verwijderen..
    public function deleteResultaat($Id)
    {
        global $conn;
        //statements
        $sql = $conn->prepare(" DELETE FROM resultaat
        where Id = :Id");
        // zet de variable naar statement
        $sql->bindParam(":Id", $Id);
        $sql->execute();
    }
//updateResultaat-methode:
//Deze methode werkt de gegevens van een bestaande user in de database bij op basis van id
// Het voert een SQL-updatequery uit om de gegevens van de route te updaten
    public function updateResultaat($Id)
    {
        global $conn;
        // zet info van de variables naar  statements
        $Id;
        $persoonId = $this->get_persoonId();
        $landId = $this->get_landId();
        $ingredientId = $this->get_ingredientId();


        // statement
        $sql = $conn->prepare("
									update resultaat
									set persoonId= :persoonId, landId= :landId,
									    ingredientId= :ingredientId
									where Id= :Id
								 ");
        // variables naar statements

        $sql->bindParam(":Id", $Id);
        $sql->bindParam(":persoonId", $persoonId);
        $sql->bindParam(":landId", $landId);
        $sql->bindParam(":ingredientId", $ingredientId);
        $sql->execute();
    }
}
