<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" type="image/ico" href="img/favicon2.ico" />

  <title>Login</title>
</head>
<body class="bg-image">
  <div class="container">
      <div class="login-container">
          <?
          if (isset($_POST["login"]) && !empty($_POST["username"]) && !empty($_POST["password"])) {
              echo "<h1>Login Correcto</h1>";
          }
          ?>
      </div>
      <div class="container">
          <form class="form-signin" role="form"
                action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"
                method="post">
              <div>
                  <?php
                  echo "<select name =\"section\" id =\"section\"> 
      <option selected=\"selected\">Escoge un hotel</option>";


                  foreach ($response as &$valor) {
                      $list_hotels = $valor["display_name"];
                      echo "<option value=" . $list_hotels . ">" . $list_hotels . "</option>";
                  }
                  echo "</select>";
                  ?>
              </div>
              <input type="text" class="form-control"
                     name="username"></br>
              <input type="password" required>
              <button type="submit" name="login">Login</button>
          </form>
      </div>
  </div>
</body>
</html>