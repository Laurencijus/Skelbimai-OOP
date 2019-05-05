<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title> Skelbimai </title>

  
  <link rel="stylesheet" href="<?= URL.'css/bootstrap.css' ?>">


</head>
<body>

<div class="container">
<div class="row justify-content-md-center">
<div class="col col-lg-2">

<a href="<?= URL.'?action=new' ?>">Naujas</a>
<a href="<?php echo URL.'?action=index' ?>">Skelbimai</a>
<?php  
    if(App::$app->auth->info()){
    echo App::$app->auth->info();
  ?>
    <a href="<?php echo URL.'?action=logout' ?>">Atsijungti</a>
    <?php
  }
    else {
      ?>
      <a href="<?php echo URL.'?action=login' ?>">Prisijungti</a>
      <?php
    }
 ?>

</div>
</div>
</div>