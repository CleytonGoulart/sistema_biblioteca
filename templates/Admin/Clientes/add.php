<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cliente $cliente
 */
?>
<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Cliente
      <small><?php echo __('Cadastrar'); ?></small>
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
            <h3 class="box-title"><?php echo __(''); ?></h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <?php echo $this->Form->create($cliente, ['role' => 'form']); ?>
            <div class="box-body">
            <div class="col-md-6">
            <?php echo $this->Form->control('nome', ['required' => true]); ?>
          </div>
          <div class="col-md-6">
            <?php echo $this->Form->control('data_nascimento', ['type' => 'text', 'class' => 'form-control datepicker']); ?>
          </div>
          <div class="col-md-6">
            <?php echo $this->Form->control('cpf', ['required' => true]); ?>
          </div>
          <div class="col-md-6">
            <?php echo $this->Form->control('telefone', ['required' => true]); ?>
          </div>
          <div class="col-md-6">
            <?php echo $this->Form->control('email', ['required' => true]); ?>
          </div>
          <div class="col-md-6">
            <?php echo $this->Form->control('cep', ['required' => true]); ?>
          </div>
          <div class="col-md-6">
            <?php echo $this->Form->control('estado', ['required' => true]); ?>
          </div>
          <div class="col-md-6">
            <?php echo $this->Form->control('cidade', ['required' => true]); ?>
          </div>
          <div class="col-md-6">
            <?php echo $this->Form->control('bairro', ['required' => true]); ?>
          </div>
          <div class="col-md-6">
            <?php echo $this->Form->control('rua', ['required' => true]); ?>
          </div>
          <div class="col-md-6">
            <?php echo $this->Form->control('numero', ['required' => true]); ?>
          </div>

          <div class="col-md-12 text-right">
            <?php echo $this->Form->submit(__('Salvar')); ?>
          </div>
            </div>
            <!-- /.box-body -->

          <?php echo $this->Form->submit(__('Submit')); ?>

          <?php echo $this->Form->end(); ?>
        </div>
        <!-- /.box -->
      </div>
  </div>
  <!-- /.row -->
</section>

