<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
<!--    <link rel="icon" type="image/ico" href="img/favicon2.ico"/>-->

    <title>Login - ID90Travel</title>
</head>
<body class="bg-image">
<div class="container">
    <div class="login-container">
    </div>
    <div class="container">
        <form class="form-signin" role="form"
              action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"
              method="post">
            <div class="form-group">
                <div class="input-group">
                <select class="form-control" id="sel1" name="airline">

                <?php
                foreach ($response as &$valor) {
                    $list_hotels = $valor["display_name"];
                    echo "<option name='.$list_hotels.'>".$list_hotels."</option>";
                }
                ?>
                </select>
                </div>
                <div class="input-group">
                    <input type="text" name="usuario" placeholder="Usuario" class="form-control"></br>
                </div>
                <div class="input-group">
                    <input type="password" name="password" placeholder="Contraseña" class="form-control">
                </div>
                <button type="submit" name="login" class="btn btn-flat-green">Login</button>
        </form>
    </div>
</div>
</body>
</html>