<?php session_start();
require "../admin/config.php";
require "../functions.php";

$db = $_SESSION["usuario"]["codigo"];
$username = $_SESSION["usuario"]["usuario"];
$password = $_SESSION["usuario"]["password"];
 ?>

 <!DOCTYPE html>
 <html lang="es-AR" data-website-id=1 data-oe-company-name="MADKETING">
 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="../css/font-awesome.min.css">
     <link rel="stylesheet" href="../css/style.css">
     <link rel="icon" type="image/ico" href="img/favicon2.ico" />
     <title>Login-Leading</title>

     <script>
      window.onload=function(){
        document.forms["formulario_odoo"].submit();
      }
      </script>

   </head>
   <body class="bg-image">
     <div id="wrapwrap" class="container">
       <main>
         <div class="oe_website_login_container">
           <form name="formulario_odoo" class="oe_login_form" role="form" action="https://crm.madketing.com.ar/web/login" method="post" onsubmit="this.action = this.action + location.hash">
             <div class="form-group field-db">
               <div class="input-group">
                 <input type="hidden" name="db" value="<?php echo $db; ?>"  id="db" class="form-control" required="required" readonly="readonly"/>
               </div>
             </div>
             <div class="form-group field-login">
               <input type="hidden" name="login" value="<?php echo $username; ?>" id="login" class="form-control" required="required" autofocus="autofocus" autocapitalize="off" placeholder="Email ..." autocomplete="off" autocorrect="off"/>
             </div>
             <div class="form-group field-password">
               <input type="hidden" name="password" value="<?php echo $password; ?>" id="password" class="form-control" required="required" autocomplete="current-password" maxlength="4096" placeholder="Password ..."/>
             </div>
             <input type="hidden" name="redirect"/>
             <div class="clearfix oe_login_buttons">
               <button type="submit" class="btn btn-primary" style="visibility:hidden">Iniciar Sesion</button>
             </div>
           </form>
         </div>
       </main>
     </div>
    </body>
 </html>
