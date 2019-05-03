<?php
include "./Assets/PHP/Entity/City.php";

$city = new City();
$cities = $city->getCities();

/*
$city1 = new City();
$city1->setName("Montpellier");
array_push($cities, $city1);
$city2 = new City();
$city2->setName("Marseille");
array_push($cities, $city2);
$city3 = new City();
$city3->setName("Paris");
array_push($cities, $city3);
*/

if(isset($_REQUEST['city'])){
    $cityName = $_REQUEST['city'];
    $c = new City();
    $c->setName($cityName);
}

if(isset($_REQUEST['cityName'])){
    var_dump($_REQUEST['cityName']);
    $name = $_REQUEST['cityName'];
    $query = getPDO()->query("DELETE FROM city WHERE name =".$name);
    $query->fetch();
}

?>