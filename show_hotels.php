<?php
session_start();

foreach ($_SESSION["hotels_response"] as &$valor) {
    $hotel_name = $valor["name"];
    $check_in = $valor["checkin"];
    $check_out = $valor["checkout"];
    $image = $valor["image"];

}

require 'views/show_hotels.view.php';
