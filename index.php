<?php


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
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $remote_server_output = curl_exec ($ch);
    $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close ($ch);

    if ($status == 200) {
        header("Location: views/date_selector.view.php");
    }

}
require 'views/login.view.php';

    ?>






