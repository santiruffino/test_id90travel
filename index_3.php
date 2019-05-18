<?php

require 'functions.php';


$content = file_get_contents("https://beta.id90travel.com/airlines");
$response = json_decode($content, true);
$ch = curl_init();





if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $airline = $_POST["airline"];
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    curl_setopt($ch, CURLOPT_URL,"https://beta.id90travel.com/session");
    curl_setopt($ch, CURLOPT_POST, TRUE);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "session[airline]"."=".$airline."&session[username]=".$usuario."&session[password]=".$password."&session[remember_me]=1");
    $remote_server_output = curl_exec ($ch);
    curl_close ($ch);





}
require 'views/login_2.view.php';

    ?>






