<?php

$error = "";

   include("config/config.php");
   session_start();
   
   if(isset( $_POST ) && ! empty( $_POST )) {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($mysqli,$_POST['username']);
      $mypassword = mysqli_real_escape_string($mysqli,$_POST['password']); 
      
      $sql = "SELECT id FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";
      $result = mysqli_query($mysqli,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
    
      if($count == 1) {
         $_SESSION['login_user_pet'] = $myusername;
         
         header("location: admin.php");
      }else {
         $error = "Seu login e senha estão incorretos";
      }
   }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>PetShop | Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="dist/css/adminx.css" media="screen" />
  </head>
  <body>
    <div class="adminx-container d-flex justify-content-center align-items-center">
      <div class="page-login">
        <div class="text-center">
          <a class="navbar-brand mb-4 h1" href="login.html">
            Painel de acesso
          </a>
        </div>

        <div class="card mb-0">
          <div class="card-body">
            <form action="" method="post">
              <div class="form-group">
                <label for="exampleDropdownFormEmail1" class="form-label">Usuário</label>
                <input type="text" class="form-control" name = "username" id="exampleDropdownFormEmail1" placeholder="usuário">
              </div>
              <div class="form-group">
                <label for="exampleDropdownFormPassword1" class="form-label">Senha</label>
                <input type="password" class="form-control" name = "password" id="exampleDropdownFormPassword1" placeholder="Senha">
              </div>
              <div class="form-group">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck1">
                  <label class="custom-control-label" for="customCheck1">Manter conectado</label>
                </div>
              </div>
              <input type = "submit" class="btn btn-sm btn-block btn-primary" value = "Enviar"/>
              <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
            </form>
          </div>
          <div class="card-footer text-center">
            <a href="#"><small>Esqueceu a senha?</small></a>
          </div>
        </div>
      </div>
    </div>

    <!-- If you prefer jQuery these are the required scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <script src="../dist/js/vendor.js"></script>
    <script src="../dist/js/adminx.js"></script>

    <!-- If you prefer vanilla JS these are the only required scripts -->
    <!-- script src="../dist/js/vendor.js"></script>
    <script src="../dist/js/adminx.vanilla.js"></script-->
  </body>
</html>