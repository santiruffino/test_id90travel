<?php

$content = file_get_contents("https://beta.id90travel.com/airlines");
$response = json_decode($content, true);

echo "<p>Selecciona un hotel</p>";
echo "<select name =\"section\" id =\"section\"> 
      <option selected=\"selected\">Choose one</option>";


foreach ($response as &$valor) {
    $list_hotels = $valor["display_name"];
//    echo $list_hotels;
    echo "<option value=".$list_hotels.">".$list_hotels."</option>";
}
echo"</select>";

//require 'views/login.view.php';


