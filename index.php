<?php

session_start();
$content = file_get_contents("https://beta.id90travel.com/airlines");
$response = json_decode($content, true);
$ch = curl_init();
$errores = '';



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $airline = $_POST["airline"];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $_SESSION['airline'] = $airline;
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;

    curl_setopt($ch, CURLOPT_URL,"https://beta.id90travel.com/session");
    curl_setopt($ch, CURLOPT_POST, TRUE);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "/home/software/Descargas/0 (1).ico[airline]"."=".$airline."&session[username]=".$username."&session[password]=".$password."&session[remember_me]=1");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

    $remote_server_output = curl_exec ($ch);
    $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $result = json_decode($remote_server_output,true);


    $_SESSION["server_response"] = $result;

    curl_close ($ch);

    if ($status == 200) {
        header("Location: content.php");
    } else {
        $errores .= '<div class="alert alert-warning" role="alert">Usuario y/o contraseña incorrectos</div>';
    }

}
require 'views/login.view.php';

    ?>






