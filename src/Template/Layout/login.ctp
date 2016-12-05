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
    <?= $this->Html->charset() ?>
     <!-- Aquí se llama a bootstrap -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
    <link type="text/css" rel="stylesheet" href="/css/handyhand.css">
    <style id="custom-css">#jumbo 
        {
          background-color: #333;
          color: #eee;
        }

        #jumbo p 
        {
          font-size: 16px;
        }
        #try-header {
          margin: 30px 0px;
        }
        #try-more {
          margin: 30px 0px;
          font-style: italic;
        }
    </style>

    <script>
      parent.FrameWindow = window;
      parent.FrameDocument = document;
    </script>

    <style type="text/css">
      .scrollable {
        height: 100px;
        overflow-y: scroll;
      }
    </style>
    <!-- Aquí continúa el código normal -->

    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body class="scrollable">
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
  <script src="/js/jquery.js"></script>
  <script src="/js/bootstrap.min.js"></script>
</body>
</html>
