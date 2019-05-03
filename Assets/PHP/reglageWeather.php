<?php
require_once("./Assets/PHP/query.php");
foreach($cities as $city){
    $url = "http://api.openweathermap.org/data/2.5/weather?q=".$city['name']."&units=metric&appid=7066fbd2464f15776cf2df43d20aab57";
    $data = file_get_contents($url);
    $json = json_decode($data, true);
    $temp = $json['main']['temp'];
    ?>
    <div class="col-4">
        <div class="row">
            <div class="card text-center customCard" style="width: 18rem;">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item" id="<?php echo $city['name'];?>" value="<?php echo $city['name'];?>"><?php echo $city['name'];?></li>
                    <li class="list-group-item"><?php echo $temp." °C";?></li>
                    <li class="list-group-item"><button class="btn btn-dark" onclick="deleteCity(<?php echo $city['name'];?>)">Supprimer</button></li>
                </ul>
            </div>
        </div>
    </div>
    <br>
<?php
}
?>