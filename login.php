<?php
$level = 1;
require_once '/core/init.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/buttons.css" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body>

 <div class="jumbotron">

  <div class="container">
       <h2>Login Admin</h2>

    <form action="includes/prosess/login.php" method="post" class="login form-horizontal" role="form">
      
      <div class="col-md-4 col-sm-6">

        <div class="form-group">
          <div class="col-sm-10">
            <input type="text" name="username" class="username form-control" id="login" placeholder="username"/>
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-10">
            <input type="password" name="password" class="password form-control" id="login" placeholder="password"/>
          </div>
        </div>

      </div>

      <div class="col-md-2 col-sm-4">
        <div class="form-group" id="btn-login">
          <div class="col-sm-10" id="tombol">
            <button type="submit" class="tombol glow tombol-border-white tombol-circle">Sign in</button>
          </div>
          <div class="loader" id="loader">Loading...</div>
        </div>
      </div>

    <div class="col-md-6 col-sm-12">
      <div class="container">
        <div class="alert alert-danger text-center center" id="error"></div>
      </div>
    </div>

    </form>

  </div><!-- end container -->
 </div><!-- end Jumbotron -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
