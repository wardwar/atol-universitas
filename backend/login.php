<?php
$level = 1;
require_once '../core/init.php';

include '../includes/overall/header.php';
?>
<body id="body-login">
 <div class="jumbotron" id="jumbotron">

  <div class="container">
       <h2>Login Admin</h2>

    <form action="<?=Url::base()?>includes/prosess/login.php" method="post" class="login form-horizontal" role="form">
      
      <div class="col-md-4 col-sm-6">

        <div class="form-group">
          <div class="col-sm-10 col-xs-6">
            <input type="text" name="username" class="username form-control" id="login" placeholder="username"/>
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-10 col-xs-6">
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

<?php
include '../includes/overall/footer.php';
?>