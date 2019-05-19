<?php
session_start();
if(!isset($_SESSION['usuario'])) {
    die("No estas logueado!");
}
$usuario = $_SESSION["usuario"];
$response = $_SESSION["server_response"];

echo $response;


require "views/date_selector.view.php";

?>