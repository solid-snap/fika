<?php
require "dbConnect.php";
class ingrediënt
{
    private $naam;

    function __construct($naam = NULL)

    {
        $this->naam = $naam;

    }


    function set_naam($naam)
    {
         $this->naam = $naam;
    }

    function get_naam()
    {
        return $this->naam;
    }


    public function afdrukken()
    {
        echo $this->get_naam();
        echo "<br/>";

    }

    public function create()
    {
        $Id = NULL;
        $naam = $this->get_naam();

        try {
            global $conn;
            $sql = $conn->prepare("INSERT INTO ingrediënt VALUES (:Id,:naam)");
            $sql->bindParam(":Id", $Id);
            $sql->bindParam(":naam", $naam);
            $sql->execute();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function update($Id)
    {
        global $conn;
        $Id;
        $naam = $this->get_naam();


        $sql = $conn->prepare("update ingrediënt set naam=:naam where Id=:Id");
        $sql->bindParam(":Id", $Id);
        $sql->bindParam("naam", $naam);
        $sql->execute();
    }

    public function read()
    {
        global $conn;
        $sql = $conn->prepare("SELECT * from ingrediënt");
        $sql->execute();

        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Naam</th></tr>";

        foreach ($sql as $ingrediënt) {

            echo "<tr>";

            echo "<td>" . $ingrediënt["Id"] . "</td>";
            echo "<td>" . $ingrediënt["naam"] . "</td>";



            echo "</tr>";
        }


        echo "</table>";
    }

    public function search($Id)
    {
        global $conn;
        $sql = $conn->prepare("select * from ingrediënt where Id=:Id");
        $sql->execute([":Id" => $Id]);
        foreach ($sql as $ingrediënt) {

            echo $this->naam = $ingrediënt["naam"]."<br>";
            echo $this->Id = $ingrediënt["Id"];
        }

    }

    public function delete($Id)
    {
        global $conn;
        $sql = $conn->prepare("DELETE FROM ingrediënt where Id =:Id");
        $sql->bindParam(":Id", $Id);
        $sql->execute();
    }
}