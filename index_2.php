<?php

$content = file_get_contents("https://beta.id90travel.com/airlines");
$response = json_decode($content, true);

require 'views/login_2.view.php';

    ?>






