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

    $params = "destination=".$destination."&checkin=".$check_in_format."&checkout=".$check_out_format."&guests[]=".$guests;

    curl_setopt_array($ch, array(
        CURLOPT_URL => "https://beta.id90travel.com/api/v1/hotels?".$params,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_POSTFIELDS => "",
        CURLOPT_HTTPHEADER => array(
            "Postman-Token: 1dc75080-cab5-4dad-b0e5-71c6aca0c3f3",
            "cache-control: no-cache"
        ),
    ));

    $hotels_response = curl_exec ($ch);

    $hotels_response_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $hotels_response_result = json_decode($hotels_response,true);

    $_SESSION["hotels_response"] = $hotels_response_result["hotels"];

    curl_close ($ch);

//    echo $hotels_response_status;
}

$first_name = $_SESSION["server_response"]["member"]["first_name"];

require "views/content.view.php";

?>