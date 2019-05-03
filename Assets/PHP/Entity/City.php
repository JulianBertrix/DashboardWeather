<?php
include "./Database/connexion.php";

class City{
    private $name;

    public function getCities(){
        $query = getPDO()->query("SELECT * FROM city");
        $result = $query->fetchAll();
        return $result;
    }

    public function getName($name){
        $this->name = $name;
        $query = getPDO()->query("SELECT * FROM city WHERE name=".$this->name);
        $query->fetch();
        return $query;
    }

    public function setName($name){
        $this->name = $name;
        $query = getPDO()->query("INSERT INTO city(name) VALUES ('$name')");
        $query->fetch();
        return $query;
    }
}
?>