<?php
require_once("./Assets/PHP/query.php");

foreach($cities as $city){
    $url = "http://api.openweathermap.org/data/2.5/weather?q=".$city[0]."&units=metric&appid=7066fbd2464f15776cf2df43d20aab57";
    $data = file_get_contents($url);
    $json = json_decode($data, true);
    //var_dump($json);
    $temp = $json['main']['temp'];
    $weather = $json['weather'][0]['description'];
    $icon = $json['weather'][0]['icon'];
    ?>
    <div class="col-4">
        <div class="row">
        <img class="icon" src="<?php echo "http://openweathermap.org/img/w/".$icon.".png"?>">
        <div class="card text-center customCard" style="width: 18rem;">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><?php echo $city[0];?></li>
                <li class="list-group-item"><?php echo $temp." °C";?></li>
            </ul>
        </div>
        </div>
    </div>
    <br>
<?php
}
?>