<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/ico" href="img/favicon.ico"/>

    <title>ID90Travel</title>
</head>

<body class="bg-image">
<div class="container">
    <div class="row">
        <div class="col-container">
            <?php
            foreach ($_SESSION["hotels_response"] as &$valor) {
                $hotel_name = $valor["name"];
                $image = $valor["image"];
                $check_in = $valor["checkin"];
                $check_out = $valor["checkout"];
                $description = $valor["description"];

                echo "<div class=\"card\" style=\"width:100%\">
                    <div class=\"card-body\">
                        <h4 class=\"card-title\">$hotel_name</h4>
                            <p class=\"card-text\">$description</p>  
                    </div>
                  </div>";
            } ?>
        </div>
    </div>
</body>