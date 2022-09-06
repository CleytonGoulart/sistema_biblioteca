<?php

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.10.0
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$this->disableAutoLayout();

$cakeDescription = 'Grupo Longevie - Certificado';
?>
<!DOCTYPE html>
<html>

<head>
  <?= $this->Html->charset() ?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    <?= $cakeDescription ?>:
    <?= $this->fetch('title') ?>
  </title>
  <?= $this->Html->meta('icon') ?>

  <link rel="icon" type="imagem/jpg" href="mentor/img/logo/logo.jpg" />

  <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake', 'home', 'agendas']) ?>

  <?= $this->fetch('meta') ?>
  <?= $this->fetch('css') ?>
  <?= $this->fetch('script') ?>
</head>
<style>
* {
  -webkit-print-color-adjust: exact !important;
  color-adjust: exact !important;
}

html,
body {
  background-color: #fff;
  height: 100%;
  font-size: 100%;
}
</style>

<body>
  <?= $this->fetch('content'); ?>

  <script>
  window.print();
  </script>
</body>

</html>
