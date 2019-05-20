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

    $check_in_format = date("Y-m-d", strtotime($check_in));
    $check_out_format = date("Y-m-d", strtotime($check_out));

    curl_setopt($ch, CURLOPT_URL,"https://beta.id90travel.com/api/v1/hotels");
    curl_setopt($ch, CURLOPT_POSTFIELDS, "destination=".$destination."&checkin=".$check_in_format."&checkout=".$check_out_format."&guests[]=".$guests);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');


    $hotels_response = curl_exec ($ch);
    echo $hotels_response;

    $hotels_response_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $hotels_response_result = json_decode($hotels_response,true);

    $_SESSION["hotels_response"] = $hotels_response_result;

    curl_close ($ch);

    echo $hotels_response_status;
}

$first_name = $_SESSION["server_response"]["member"]["first_name"];

require "views/content.view.php";

?>