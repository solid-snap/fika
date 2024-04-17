<?php
require_once "dbConnect.php";

class land
{

    // properties ------
    public $Id;
    public $naam;




    //method -- functions
    // constructor
    function __construct($naam = NULL)
    {
        $this->naam = $naam;



    }
// setters plaatsen waarde in object

    function set_Id($Id)
    {
        return $this->Id = $Id;
    }

    function set_naam($naam)
    {
        return $this->naam = $naam;
    }


    // getters halen waarden van opbject op
    function get_Id()
    {
        return $this->Id;
    }
    function get_naam()
    {
        return $this->naam;
    }




    public function afdrukken()
    {
        echo $this->get_Id();
        echo "<br/>";
        echo $this->get_naam();
        echo "<br/>";

    }
// createWerknemers-methode:
//voegt een nieuwe user toe aan de database
//Het haalt de waarden van de eigenschappen op en voert een SQL-invoegquery uit.
    public function createLand()
    {
        global $conn;
        // info from the objects into the statements
        $Id = NULL;
        $naam = $this->get_naam();


        // prepares statement from the table
        $sql = $conn->Prepare("insert into land
values (:Id,:naam)");
// variables into the statement
        $sql->bindParam(":Id", $Id);
        $sql->bindParam(":naam", $naam);

        $sql->execute();

        echo "gelukt";
        //melding


    }
// deze methode wordt niet gebruikt
    public function readLand()
    {
        global $conn;
        // makes statement
        $sql = $conn->prepare(" SELECT * FROM land");
        $sql->execute();
        foreach ($sql as $land) {
            echo $land["Id"] . " - ";                         //
            $this->set_naam($land["naam"]);
            echo $land["naam"] . " - ";

        }
    }
//searchWerknemers-methode:
//Deze methode zoekt een  user op basis van $Werknemers_Id en toont de info
// Het voert een SQL-query uit met een parameter om de route te selecteren..
    public function searchLand($Id)
    {
        global $conn;
        // sql statement
        $sql = $conn->prepare("select * from land
                               where Id = :Id");
        // variables into the statement
        $sql->bindParam(":Id", $Id);
        $sql->execute();
        // info from the array in object and prints it
        foreach ($sql as $land) {
            echo $land["Id"] . "<br>";
            echo $this->naam = $land["naam"] . "<br>";

        }
    }
//deleteWerknemers-methode:
//Deze methode verwijdert een user uit de database met een  gegeven id
// het voert een SQL-verwijderquery uit met een parameter om de route te verwijderen..
    public function deleteLand($Id)
    {
        global $conn;
        //statements
        $sql = $conn->prepare(" DELETE FROM land
        where Id = :Id");
        // puts variables into the statement
        $sql->bindParam(":Id", $Id);
        $sql->execute();
    }
//updateWerknemers-methode:
//Deze methode werkt de gegevens van een bestaande user in de database bij op basis van id
// Het voert een SQL-updatequery uit om de gegevens van de route te updaten
    public function updateLand($Id)
    {
        global $conn;
        // puts info from the variables into the statement
        $Id;
        $naam = $this->get_naam();


        // statement
        $sql = $conn->prepare("     update land
									set naam= :naam  
									where Id= :Id
								 ");
        // variables into the statements

        $sql->bindParam(":Id", $Id);
        $sql->bindParam(":naam", $naam);
        $sql->execute();
    }
}


