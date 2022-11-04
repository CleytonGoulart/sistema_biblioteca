<section class="content-header">
  <h1>
    Livro
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
            <dt scope="row"><?= __('Editora') ?></dt>
            <dd><?= $livro->has('editora') ? $this->Html->link($livro->editora->id, ['controller' => 'Editoras', 'action' => 'view', $livro->editora->id]) : '' ?></dd>
            <dt scope="row"><?= __('Categoria') ?></dt>
            <dd><?= $livro->has('categoria') ? $this->Html->link($livro->categoria->nome, ['controller' => 'Categorias', 'action' => 'view', $livro->categoria->id]) : '' ?></dd>
            <dt scope="row"><?= __('Nome') ?></dt>
            <dd><?= h($livro->nome) ?></dd>
            <dt scope="row"><?= __('Assunto') ?></dt>
            <dd><?= h($livro->assunto) ?></dd>
            <dt scope="row"><?= __('Autor') ?></dt>
            <dd><?= h($livro->autor) ?></dd>
            <dt scope="row"><?= __('Situaco') ?></dt>
            <dd><?= $livro->has('situaco') ? $this->Html->link($livro->situaco->id, ['controller' => 'Situacoes', 'action' => 'view', $livro->situaco->id]) : '' ?></dd>
            <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($livro->id) ?></dd>
            <dt scope="row"><?= __('Cadastrado Por') ?></dt>
            <dd><?= $this->Number->format($livro->cadastrado_por) ?></dd>
            <dt scope="row"><?= __('Modificado Por') ?></dt>
            <dd><?= $this->Number->format($livro->modificado_por) ?></dd>
            <dt scope="row"><?= __('Created') ?></dt>
            <dd><?= h($livro->created) ?></dd>
            <dt scope="row"><?= __('Modified') ?></dt>
            <dd><?= h($livro->modified) ?></dd>
          </dl>
        </div>
      </div>
    </div>
  </div>

</section>
