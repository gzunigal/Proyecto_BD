<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html>
<html>
<head>
  <?php $this->Html->charset() ?>
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administrador - Definir Emergencia</title>

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
    <!-- Legit Scrollbar CSS -->
    <!-- <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css"> -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
  <?= $this->Flash->render() ?>
  <div class="container clearfix"><?= $this->fetch('content') ?></div>
  <!-- jQuery -->
    <script src="/js/jquery-2.2.4.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/js/bootstrap.min.js"></script>

    <!-- Legit Ripple JavaScript -->
    <script src="/js/ripple.min.js"></script>

    <!-- Pages JavaScript -->
    <script src="/js/pages.js"></script>
</body>
</html>
