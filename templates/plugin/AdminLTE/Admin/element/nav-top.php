<?php

use Cake\Core\Configure; ?>
<nav class="navbar navbar-static-top">

  <?php if (isset($layout) && $layout == 'top') : ?>
    <div class="container">

      <div class="navbar-header">
        <a href="<?php echo $this->Url->build('/'); ?>" class="navbar-brand"><?php echo Configure::read('Theme.logo.large') ?></a>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
          <i class="fa fa-bars"></i>
        </button>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
          <li><a href="#">Link</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li><a href="#">Separated link</a></li>
              <li class="divider"></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>
        </ul>
        <form class="navbar-form navbar-left" role="search">
          <div class="form-group">
            <input type="text" class="form-control" id="navbar-search-input" placeholder="Search">
          </div>
        </form>
      </div>
      <!-- /.navbar-collapse -->
    <?php else : ?>

      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

    <?php endif; ?>



    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <?php echo $this->Html->image('user2-160x160.jpg', array('class' => 'user-image', 'alt' => 'User Image')); ?>
            <span class="hidden-xs"> <?= $_SESSION['Auth']['Admin']['nome'] ?></span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <?php echo $this->Html->image('user2-160x160.jpg', array('class' => 'img-circle', 'alt' => 'User Image')); ?>

              <p>
                <?= $_SESSION['Auth']['Admin']['nome'] ?>
                <small></small>
              </p>
            </li>
        </li>
        <!-- Menu Footer-->
        <li class="user-footer">
          <div class="pull-left">
            <a href="<?= $this->Url->build(['controller' => 'Usuarios', 'action' => 'edit', $_SESSION['Auth']['Admin']['id']]) ?>" class="btn btn-default btn-flat">Seu Login</a>
            <a href="<?= $this->Url->build(['controller' => 'Usuarios', 'action' => 'edit', $_SESSION['Auth']['Admin']['id']]) ?>" class="btn btn-default btn-flat">Seu Cadastro</a>

          </div>
          <div class="pull-right">
            <a href="<?= $this->Url->build(['controller' => 'Auth', 'action' => 'logout']) ?>" class="btn btn-default btn-flat">Sair</a>
          </div>
        </li>
      </ul>
      </li>
      <!-- Control Sidebar Toggle Button -->
      <?php if (!isset($layout)) : ?>
        <li>
          <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
        </li>
      <?php endif; ?>
      </ul>
    </div>
    <?php if (isset($layout) && $layout == 'top') : ?>
    </div>
  <?php endif; ?>
</nav>