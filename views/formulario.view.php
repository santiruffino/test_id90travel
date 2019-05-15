<?php session_start();

require '../admin/config.php';
require '../functions.php';

$db = $_SESSION['usuario']['codigo'];                 //User Database code
$username = $_SESSION['usuario']['usuario'];          //User username
$password = $_SESSION['usuario']['password'];         //User password
 ?>

 <!DOCTYPE html>
 <html lang="es-AR" data-website-id="1" data-oe-company-name="MADKETING S.R.L">
 <head>
   <link rel="stylesheet" href="css/font-awesome.min.css">
   <link rel="stylesheet" href="css/style.css">
   <link rel="icon" type="image/ico" href="img/favicon2.ico" />

   <!-- <script>
     window.onload=function(){
       document.forms["formulario_odoo"].submit();
     }
   </script> -->

   <meta charset="utf-8"/>
   <meta name="viewport" content="initial-scale=1"/>
   <meta name="description"/>
   <meta name="keywords"/>
   <meta name="generator" content="Odoo"/>
   <meta property="og:title" content="Login"/>
   <meta property="og:site_name" content="MADKETING S.R.L"/>

   <title>Login-Leading</title>

</head>
<body class="bg-image">
  <div id="wrapwrap">
    <main>
      <div class="oe_website_login_container">
        <form name="formulario_odoo" class="oe_login_form" role="form" action="https://crm.madketing.com.ar/web/login" method="post" onsubmit="this.action = this.action + location.hash">
          <div class="form-group field-db">
            <div class="input-group">
              <input type="text" name="db" value="<?php echo $db; ?>"  id="db" class="form-control" required="required" readonly="readonly"/>
            </div>
          </div>
          <div class="form-group field-login">
            <input type="text" name="login" value="<?php echo $username; ?>" id="login" class="form-control" required="required" autofocus="autofocus" autocapitalize="off" placeholder="Email ..." autocomplete="off" autocorrect="off"/>
          </div>
          <div class="form-group field-password">
            <input type="password" name="password" value="<?php echo $password; ?>" id="password" class="form-control" required="required" autocomplete="current-password" maxlength="4096" placeholder="Password ..."/>
          </div>
          <input type="hidden" name="redirect"/>
          <div class="clearfix oe_login_buttons">
            <button type="submit" class="btn btn-primary">Iniciar Sesion</button>
          </div>
        </form>
      </div>
    </main>
  </div>
 </body>
 </html>
