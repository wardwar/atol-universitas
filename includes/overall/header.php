<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

        <link href="<?=Url::base()?>css/bootstrap.min.css" rel="stylesheet">
        <link href="<?=Url::base()?>css/style.css" rel="stylesheet">
        <link href="<?=Url::base()?>css/buttons.css" rel="stylesheet">
        <link href="<?=Url::base()?>font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?=Url::base()?>fonts/flat/flaticon.css" rel="stylesheet">
        <link href="<?=Url::base()?>css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">
        <link href="<?=Url::base()?>css/plugins/timeline/timeline.css" rel="stylesheet">
        <link href="<?=Url::base()?>css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
        <?php
            if(!empty($page)) {

                if($page == 'main') {
                    ?>
                    <link href="<?=Url::base()?>css/main.css" rel="stylesheet">
                    <?php
                }
                else if($page == 'admin') {
                    ?>
                     <link href="<?=Url::base()?>css/sb-admin.css" rel="stylesheet">
                    <?php
                }
            }
        ?>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
