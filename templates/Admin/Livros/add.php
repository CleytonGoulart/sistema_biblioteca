<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Livro $livro
 */
?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Livro
    <small><?php echo __('Add'); ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo $this->Url->build(['action' => 'index']); ?>"><i class="fa fa-dashboard"></i> <?php echo __('Home'); ?></a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title"><?php echo __('Form'); ?></h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <?php echo $this->Form->create($livro, ['role' => 'form']); ?>
        <div class="box-body">
          <div class="col-md-6">
            <?php echo $this->Form->control('editora_id', ['options' => $editoras, 'empty' => true, 'class' => 'select2']); ?>
          </div>

          <div class="col-md-6">
            <?php echo $this->Form->control('categoria_id', ['options' => $categorias, 'empty' => true, 'class' => 'select2']); ?>
          </div>
          <div class="col-md-6">
            <?php echo $this->Form->control('nome', ['required' => true]); ?>
          </div>
          <div class="col-md-6">
            <?php echo $this->Form->control('assunto', ['required' => true]); ?>
          </div>
          <div class="col-md-6">
            <?php echo $this->Form->control('autor', ['required' => true]); ?>
          </div>
          
        </div>
        <!-- /.box-body -->

        <?php echo $this->Form->submit(__('Salvar')); ?>

        <?php echo $this->Form->end(); ?>
      </div>
      <!-- /.box -->
    </div>
  </div>
  <!-- /.row -->
</section>