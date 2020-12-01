<?php
session_start();
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>LOGIN APLIKASI SISTEM MONITORING TANGKI</title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <style>
      body{
        background: url(assets/img/telkom1.jpg) no-repeat center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
      }
      body >.container{
        margin: 80px 80px;
      }
    </style>

  </head> 
  <body>
      <div class="container">
        <div class="col-md-4 col-md-offset-4">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-tittle"><span class ="glyphicon glyphicon-lock"></span> APLIKASI SISTEM MONITORING TANGKI</h3>
            </div>
            <div class="panel-body">

            <form class="form-signin" action="cek_login.php" method="POST" autocomplete="off">
        
        <h1 class="h3 mb-3 font-weight-normal">Silahkan Login</h1>
        <?php
        if (!empty($_GET['msg'])) {
            if ($_GET['msg'] == 1) {
                echo '<div class="alert alert-danger" role="alert">Apakah Anda robot?</div>';
            } elseif ($_GET['msg'] == 2) {
                echo '<div class="alert alert-danger" role="alert">Akun Anda di blokir</div>';
            } elseif ($_GET['msg'] == 3) {
                echo '<div class="alert alert-danger" role="alert">Cek kembali username dan password Anda</div>';
            }
        }
        ?>

              <form action"" method="post" role="form">
                <div class="form-group">
                  <input type="text" class="form-control" name="username" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Login">
                </div>
              </form>

            </div>
          </div>
        </div>
        </div>



    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->

    <script src="assets/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>

    
  </body>
</html>

<?php
        if (!empty($_GET['msg'])) {
            if ($_GET['msg'] == 1) {
                echo '<div class="alert alert-danger" role="alert">Apakah Anda robot?</div>';
            } elseif ($_GET['msg'] == 2) {
                echo '<div class="alert alert-danger" role="alert">Akun Anda di blokir</div>';
            } elseif ($_GET['msg'] == 3) {
                echo '<div class="alert alert-danger" role="alert">Cek kembali username dan password Anda</div>';
            }
        }
        ?>