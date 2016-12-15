<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->Html->charset() ?>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	
	<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.css" rel="stylesheet">

    <!-- Material Design Iconic -->
    <link rel="stylesheet" href="/css/material-design-iconic-font.min.css">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="/css/animate.min.css">

    <!-- Legit Ripple CSS -->
    <link rel="stylesheet" href="/css/ripple.min.css">

    <!-- Hover CSS -->
    <link rel="stylesheet" href="/css/hover.css">

    <!-- Social Buttons CSS -->
    <link rel="stylesheet" href="/css/social-buttons.css">

    <!-- Deluxe Custom CSS -->
    <link href="/css/deluxe-admin.css" rel="stylesheet">

    <!-- Deluxe Custom CSS -->
    <link href="/css/handyhand.css" rel="stylesheet">
    <!-- Legit Scrollbar CSS -->
    <!-- <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css"> -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="pages">
  <nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: black;">
      <div class="container-fluid">
        
        <div class="navbar-header">
        <a class="navbar-left" href="/"><img style="max-height:30px;margin-top: 14px;" src="/img/handy_hand_logo.png"></a>
        
        </div>
        <ul class="nav navbar-nav">
        <li><a 
          class="btn
            <?=($User['hasMessages'])?'m-green':'m-gray'; ?>
            pull-right" 
          style="margin-left: 5px;padding-left:5px; padding-right:5px;"
          href="/Messages/">
          Mensajes
          </a>
        </li>
        <li><a 
          class="btn 
            <?=($User['hasNotifications'])?'m-green':'m-gray'; ?> 
            pull-right" 
          style="margin-left: 5px;padding-left:5px; padding-right:5px;" 
          href="/Notifications/">
          Notificaciones
          </a>
        </li>
        
        </ul>
        <ul class="nav navbar-nav pull-right">
        <li><a class="btn m-gray pull-right" style="margin-right: 5px;padding-left:10px; padding-right:10px;" href="/Users/edit/">Perfil</a></li>
        <li class="logout">
        <a class="btn m-red pull-right" style="padding-left:5px; padding-right:5px;" href="/Login/logout/">Cerrar Sesion</a>
        </li>
        </ul>
      </div>
  </nav>


<br>
<br>

   <!-- jQuery -->
    <script type="text/javascript" src="/js/jquery-2.2.4.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/js/bootstrap.min.js"></script>

    <!-- Legit Ripple JavaScript -->
    <script src="/js/ripple.min.js"></script>

    <!-- Pages JavaScript -->
    <script src="/js/pages.js"></script>

<!-- Here's where I want my views to be displayed -->
  <?= $this->Flash->render() ?>
  <div class="container clearfix">
  <?= $this->fetch('content'); ?>
  </div>


</body>
</html>
