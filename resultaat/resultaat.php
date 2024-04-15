<?php
require_once "../dbConnect.php";

class resultaat
{

    // properties ------
    public $persoonId;
    public $landId;
    public $ingrediëntId;



    //method -- functions
    // constructor
    function __construct( $persoonId = NULL, $landId = NULL, $ingrediëntId = NULL )
    {
        $this->persoonId = $persoonId;
        $this->landId = $landId;
        $this->ingrediëntId = $ingrediëntId;
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

    function set_ingrediëntId($ingrediëntId)
    {
        $this->ingrediëntId = $ingrediëntId;
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


    function get_ingrediëntId()
    {
        return $this->ingrediëntId;
    }

    public function afdrukken()
    {
        echo $this->get_persoonId();
        echo $this->get_landId();
        echo $this->get_ingrediëntId();
        echo "<br/>";
    }
// createAanwezigheid-methode:
//voegt een nieuwe user toe aan de database
//Het haalt de waarden van de eigenschappen op en voert een SQL-invoegquery uit.
    public function createResultaat()
    {
        global $conn;
        // info from the objects into the statements
        $Id = NULL;
        $persoonId = $this->get_persoonId();
        $landId = $this->get_landId();
        $ingrediëntId = $this->get_ingrediëntId();

        // prepares statement from the table
        $sql = $conn->Prepare("insert into resultaat
values (:Id,:persoonId, :landId, :ingrediëntId)");
// variables into the statement
        $sql->bindParam(":Id", $Id);
        $sql->bindParam(":persoonId", $persoonId);
        $sql->bindParam(":landId", $landId);
        $sql->bindParam(":ingrediëntId", $ingrediëntId);
        $sql->execute();
        //melding
        echo "!: </br>";

    }
// deze methode wordt niet gebruikt
    public function readResultaat()
    {
        global $conn;
        // makes statement
        $sql = $conn->prepare(" SELECT * FROM resultaat");
        $sql->execute();
        foreach ($sql as $resultaat) {
            echo $resultaat["Id"] . " - ";                         //
            $this->set_persoonId($resultaat["persoonId"]);
            echo $resultaat["persoonId"] . " - ";
            $this->set_landId($resultaat["landId"]);
            echo $resultaat["landId"] . " - ";
            $this->set_ingrediëntId($resultaat["ingrediëntId"]);
            echo $resultaat["ingrediëntId"] . " - ";
        }
    }
//searchWerknemers-methode:
//Deze methode zoekt een  user op basis van $Werknemers_Id en toont de info
// Het voert een SQL-query uit met een parameter om de route te selecteren..
    public function searchResultaat($Id)
    {
        global $conn;
        // sql statement
        $sql = $conn->prepare("select * from resultaat
                               where Id = :Id");
        // variables into the statement
        $sql->bindParam(":Id", $Id);
        $sql->execute();
        // info from the array in object and prints it
        foreach ($sql as $resultaat) {
            echo $resultaat["aanwezigheid_Id"] . "<br>";
            echo $this->persoonId = $resultaat["persoonId"] . "<br>";
            echo $this->landId = $resultaat["landId"] . "<br>";
            echo $this->ingrediëntId = $resultaat["ingrediëntId"] . "<br>";
        }
    }
//deleteAanwezigheid-methode:
//Deze methode verwijdert een user uit de database met een  gegeven id
// het voert een SQL-verwijderquery uit met een parameter om de route te verwijderen..
    public function deleteResultaat($Id)
    {
        global $conn;
        //statements
        $sql = $conn->prepare(" DELETE FROM resultaat
        where Id = :Id");
        // puts variables into the statement
        $sql->bindParam(":Id", $Id);
        $sql->execute();
    }
//updateAanwezigheid-methode:
//Deze methode werkt de gegevens van een bestaande user in de database bij op basis van id
// Het voert een SQL-updatequery uit om de gegevens van de route te updaten
    public function updateResultaat($Id)
    {
        global $conn;
        // puts info from the variables into the statement
        $Id;
        $persoonId = $this->get_persoonId();
        $landId = $this->get_landId();
        $ingrediëntId = $this->get_ingrediëntId();


        // statement
        $sql = $conn->prepare("
									update resultaat
									set persoonId= :persoonId, landId= :landId,
									    ingrediëntId= :ingrediëntId
									where Id= :Id
								 ");
        // variables into the statements

        $sql->bindParam(":Id", $Id);
        $sql->bindParam(":persoonId", $persoonId);
        $sql->bindParam(":landId", $landId);
        $sql->bindParam(":ingrediëntId", $ingrediëntId);
        $sql->execute();
    }
}
