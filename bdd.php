<?php
//Connexion à la bdd
try {
    $db = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8', 'root');
}catch (PDOException $e){
    echo $e->getMessage();
}

