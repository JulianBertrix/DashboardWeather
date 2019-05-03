<?php
function getPDO(){
    $dsn = 'mysql:host=localhost;
    dbname=pradeo;
    port=3306';
    return $pdo = new PDO($dsn, 'root' , '');
}
?>