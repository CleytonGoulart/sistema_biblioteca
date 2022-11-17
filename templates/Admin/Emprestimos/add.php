<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Emprestimo $emprestimo
 */
?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Emprestimo de Livro
    <small><?php echo __(''); ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo $this->Url->build(['action' => 'index']); ?>"><i class="fa fa-dashboard"></i> <?php echo __('Voltar'); ?></a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title"><?php echo __('Cadastrar'); ?></h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <?php echo $this->Form->create($emprestimo, ['role' => 'form']); ?>
        <div class="box-body">

          <div class="col-md-6">
            <?php echo $this->Form->control('cliente_id', ['label' => 'Aluno', 'options' => $clientes, 'empty' => true, 'class' => 'select2']); ?>
          </div>
          <div class="col-md-6">
            <?php echo $this->Form->control('livro_id', ['options' => $livros, 'empty' => true, 'class' => 'select2']); ?>
          </div>

          <div class="col-md-12">
            <?php echo $this->Form->control('observacao', ['label' => 'Observação']); ?>
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