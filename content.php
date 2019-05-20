<?php
session_start();
$ch = curl_init();

if(!isset($_SESSION['username'])) {
    die("No estas logueado!");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $guests = $_POST["guests"];
    $destination = $_POST["destination"];
    $check_in = $_POST['check-in'];
    $check_out = $_POST['check-out'];

    curl_setopt($ch, CURLOPT_URL,"https://beta.id90travel.com/hotels");
    curl_setopt($ch, CURLOPT_POST, TRUE);

}

$first_name = $_SESSION["server_response"]["member"]["first_name"];

require "views/content.view.php";

?>