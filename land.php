<?php
require_once "dbConnect.php";
//  Een class definieert de eigenschappen  properties en methoden  die objecten van die class zullen hebben.
class land
{

    // properties ------
    public $Id;
    public $naam;




    //method -- functions
    // constructor maakt iets aan
    function __construct($naam = NULL)
    {
        $this->naam = $naam;
//$this verwijst naar de class Hierdoor kun je verschillende eigenschappen instellen, ophalen methoden aanroepen methoden.


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


    // getters halen waarden van object op
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
//voegt een nieuw land toe aan de database
//Het haalt de waarden van de eigenschappen op en voert een SQL-invoegquery uit.
    public function createLand()
    {
        global $conn;
        // info van het object in statement plaatsen
        $Id = NULL;
        $naam = $this->get_naam();


        // statement van de tabel voorbereiden
        $sql = $conn->Prepare("insert into land
values (:Id,:naam)");
// variablen in statement plaatsen
        $sql->bindParam(":Id", $Id);
        $sql->bindParam(":naam", $naam);

        $sql->execute();

        echo "Land is toegevoegd";
        //melding


    }
// readLand-methode: leest alles op uit de database
    public function readLand()
    {
        global $conn;
        // maakt statement
        $sql = $conn->prepare(" SELECT * FROM land");
        $sql->execute();
        foreach ($sql as $land) {
            echo $land["Id"] . " - ";                         //
            $this->set_naam($land["naam"]);
            echo $land["naam"] . " - ";

        }
    }
//searchLand-methode:
//Deze methode zoekt een land op basis van $Id en toont de info
// Het voert een SQL-query uit met een parameter om de route te selecteren..
    public function searchLand($Id)
    {
        global $conn;
        // sql statement
        $sql = $conn->prepare("select * from land
                               where Id = :Id");
        // variables in statement plaatsen
        $sql->bindParam(":Id", $Id);
        $sql->execute();
        // info van de  array in object en print het uit
        foreach ($sql as $land) {
            echo $land["Id"] . "<br>";
            echo $this->naam = $land["naam"] . "<br>";

        }
    }
//deleteLand-methode:
//Deze methode verwijdert een user uit de database met een gegeven id
// het voert een SQL-verwijderquery uit met een parameter om een land te verwijderen..
    public function deleteLand($Id)
    {
        global $conn;
        //statements
        $sql = $conn->prepare(" DELETE FROM land
        where Id = :Id");
        //  variables in de statement
        $sql->bindParam(":Id", $Id);
        $sql->execute();
    }
//updateLand-methode:
//Deze methode werkt de gegevens van een bestaand land in de database bij op basis van id
// Het voert een SQL-updatequery uit om de gegevens van het land te updaten
    public function updateLand($Id)
    {
        global $conn;
        //  info van  variables in statement plaatsen
        $Id;
        $naam = $this->get_naam();


        // statement
        $sql = $conn->prepare("     update land
									set naam= :naam  
									where Id= :Id
								 ");
        // variables in statements plaatsen
        //Bind parameters zijn de placeholders in een prepared statement die later worden ingevuld met waarden.

        $sql->bindParam(":Id", $Id);
        $sql->bindParam(":naam", $naam);
        $sql->execute();
    }
}


