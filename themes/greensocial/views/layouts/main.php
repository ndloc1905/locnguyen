<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php echo CHtml::encode($this->pageTitle); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="A sample of social profiler use Bootstrap 3.">  
  <meta name="author" content="Phuoc Huynh">
  <link href="<?php echo Yii::app()->theme->baseUrl; ?>/images/favicon.ico" rel="icon" type="image/x-icon">
  <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet"> 
  <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap-theme.min.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,400italic,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
  <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/social-profiler.css" rel="stylesheet">  
  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/html5shiv.js"></script>
  <![endif]-->  
</head>
<body>
<!-- HEADER -->
<header id="header">
  <div class="container">
    <div class="row">
      <!-- Logo / Brand text -->
      <div class="logo col-lg-6">
        <a href="/"><span>GreenSocial</span>professional services</a>
      </div> <!-- logo / brand text -->
      <!-- Upper Toolbar -->
      <div id="upper-nav" class="col-lg-6 text-right">
        <a href="#loginModal" class="btn btn-sm btn-default" data-toggle="modal">Sign In</a>        
      </div> <!-- upper toolbar -->
    </div>
  </div>
</header> <!-- header -->
<!-- CONTENT -->
<section id="content">
  <div class="container">
    <?php echo $content; ?>
  </div>
</section> <!-- content -->
<!-- FOOTER -->
<footer id="footer">
  <div class="container">
    <div class="logo">
      <a href="/"><span>GreenSocial</span></a>
      <span>All rights reserved. Theme by GreenCodes.</span>
    </div>
  </div>
</footer> <!-- footer -->
<!-- MODAL -->
<!-- Panel: Sign In -->
<div class="modal fade" id="loginModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Sign In to your account</h4>
      </div>
      <div class="modal-body">
        <div class="alert alert-danger">          
          Oops, unknown username or password.         
        </div>
        <div class="form-group">
          <label for="exampleInputEmail">Email address</label>
          <input type="text" class="form-control" id="exampleInputEmail" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword" placeholder="Password">
        </div>
        <div class="checkbox">
          <label><input type="checkbox"> Remember me</label>
        </div>
        <p>Forgot your password? <a href="#">Click here</a></p>
      </div>
      <div class="modal-footer btn-group">        
        <button type="button" class="btn btn-primary">Sign In</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- JAVASCRIPT -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.min.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap.min.js"></script>  
</body>
</html>