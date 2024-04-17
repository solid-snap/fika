<?php
require_once "dbConnect.php";

class persoon
{

    // properties ------
    public $naam;

    // constructor
    function __construct( $naam = NULL)
    {
        $this->naam = $naam;
    }
// setters plaatsen waarde in object

    function set_naam($naam)
    {
        $this->naam = $naam;
    }


    // getters halen waarden van opbject op
    function get_naam()
    {
        return $this->naam;
    }

    public function afdrukken()
    {
        echo $this->get_naam();
        echo "<br/>";
    }
// createPersoon-methode:
//voegt een nieuwe user toe aan de database
//Het haalt de waarden van de eigenschappen op en voert een SQL-invoegquery uit.
    public function createPersoon()
    {
        global $conn;
        // info van de objecten naar statements
        $Id = NULL;
        $naam = $this->get_naam();

        // voorbereid de statements van de tabel
        $sql = $conn->Prepare("insert into persoon
values (:Id,:naam)");
// variablen naar  statements
        $sql->bindParam(":Id", $Id);
        $sql->bindParam(":naam", $naam);
        $sql->execute();
        //melding
        echo "Deze persoon is toegevoegd!</br>";

    }
// deze methode wordt niet gebruikt
    public function readPersoon()
    {
        global $conn;
        // maakt een statement
        $sql = $conn->prepare(" SELECT * FROM persoon");
        $sql->execute();
        foreach ($sql as $persoon) {
            echo $persoon["Id"] . " - ";                         //
            $this->set_naam($persoon["naam"]);
            echo $persoon["naam"] . " - ";
        }
    }
//searchPersoon-methode:
//Deze methode zoekt een  user op basis van $Id en toont de info
// Het voert een SQL-query uit met een parameter om de route te selecteren..
    public function searchPersoon($Id)
    {
        global $conn;
        // sql statement
        $sql = $conn->prepare("select * from persoon
                               where Id = :Id");
        // variables naar  statement
        $sql->bindParam(":Id", $Id);
        $sql->execute();
        //  info van de array in het object en print het uit
        foreach ($sql as $persoon) {
            echo $persoon["Id"] . "<br>";
            echo $this->naam = $persoon["naam"] . "<br>";
        }
    }
//deletePersoon-methode:
//Deze methode verwijdert een user uit de database met een  gegeven id
// het voert een SQL-verwijderquery uit met een parameter om de route te verwijderen..
    public function deletePersoon($Id)
    {
        global $conn;
        //statements
        $sql = $conn->prepare(" DELETE FROM persoon
        where Id = :Id");
        //  zet de variable naar statement
        $sql->bindParam(":Id", $Id);
        $sql->execute();
    }
//updatePersoon-methode:
//Deze methode werkt de gegevens van een bestaande user in de database bij op basis van id
// Het voert een SQL-updatequery uit om de gegevens van de route te updaten
    public function updatePersoon($Id)
    {
        global $conn;
        // veranderd info van de variables naar  statements
        $Id;
        $naam = $this->get_naam();


        // statement
        $sql = $conn->prepare("
									update persoon
									set naam= :naam 
									where Id= :Id
								 ");
        // variables naar statements

        $sql->bindParam(":Id", $Id);
        $sql->bindParam(":naam", $naam);
        $sql->execute();
    }
}
