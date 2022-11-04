<section class="content-header">
  <h1>
    Emprestimo
    <small><?php echo __('View'); ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo $this->Url->build(['action' => 'index']); ?>"><i class="fa fa-dashboard"></i> <?php echo __('Home'); ?></a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-info"></i>
          <h3 class="box-title"><?php echo __('Information'); ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <dl class="dl-horizontal">
            <dt scope="row"><?= __('Cliente') ?></dt>
            <dd><?= $emprestimo->has('cliente') ? $this->Html->link($emprestimo->cliente->id, ['controller' => 'Clientes', 'action' => 'view', $emprestimo->cliente->id]) : '' ?></dd>
            <dt scope="row"><?= __('Livro') ?></dt>
            <dd><?= $emprestimo->has('livro') ? $this->Html->link($emprestimo->livro->id, ['controller' => 'Livros', 'action' => 'view', $emprestimo->livro->id]) : '' ?></dd>
            <dt scope="row"><?= __('Usuario') ?></dt>
            <dd><?= $emprestimo->has('usuario') ? $this->Html->link($emprestimo->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $emprestimo->usuario->id]) : '' ?></dd>
            <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($emprestimo->id) ?></dd>
            <dt scope="row"><?= __('Emprestimo Funcionario Id') ?></dt>
            <dd><?= $this->Number->format($emprestimo->emprestimo_funcionario_id) ?></dd>
            <dt scope="row"><?= __('Data Emprestimo') ?></dt>
            <dd><?= h($emprestimo->data_emprestimo) ?></dd>
            <dt scope="row"><?= __('Data Devolucao') ?></dt>
            <dd><?= h($emprestimo->data_devolucao) ?></dd>
            <dt scope="row"><?= __('Created') ?></dt>
            <dd><?= h($emprestimo->created) ?></dd>
            <dt scope="row"><?= __('Modified') ?></dt>
            <dd><?= h($emprestimo->modified) ?></dd>
          </dl>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-text-width"></i>
          <h3 class="box-title"><?= __('Observacao') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?= $this->Text->autoParagraph($emprestimo->observacao); ?>
        </div>
      </div>
    </div>
  </div>
</section>
