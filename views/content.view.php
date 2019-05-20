<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/ico" href="img/favicon.ico"/>

    <title>ID90Travel</title>
</head>
<body class="bg-image">
<div id="wrapwrap" class="container">
    <div class="container">
        <h1><?php echo "Bienvenido ".$first_name ?></h1>
        <form class="form-signin" role="form"
              action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"
              method="post">
            <div class="input-group">
                <label for="guests">Cantidad de huéspedes: </label>
                <input type="number" id="guests" name="guests" placeholder="" class="form-control"></br>
            </div>
            <div class="input-group">
                <label for="destination">Destino: </label>
                <input type="text" id="destination" name="destination" placeholder="Ej: Cancun" class="form-control"></br>
            </div>
            <div class="input-group">
                <label for="check-in">Fecha de Ingreso: </label>
                <input type="date" id="check-in" name="check-in" class="form-control">
            </div>
            <div class="input-group">
                <label for="check-out">Fecha de Salida: </label>
                <input type="date" id="check-out" name="check-out" class="form-control">
            </div>
            <button type="submit" name="login" class="btn btn-flat-green">Consultar</button>
        </form>
    </div>
</div>
</body>
</html>
