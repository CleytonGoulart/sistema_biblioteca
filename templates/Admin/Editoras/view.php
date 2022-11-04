<section class="content-header">
  <h1>
    Editora
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
            <dt scope="row"><?= __('Nome') ?></dt>
            <dd><?= h($editora->nome) ?></dd>
            <dt scope="row"><?= __('Situaco') ?></dt>
            <dd><?= $editora->has('situaco') ? $this->Html->link($editora->situaco->id, ['controller' => 'Situacoes', 'action' => 'view', $editora->situaco->id]) : '' ?></dd>
            <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($editora->id) ?></dd>
            <dt scope="row"><?= __('Cadastrado Por') ?></dt>
            <dd><?= $this->Number->format($editora->cadastrado_por) ?></dd>
            <dt scope="row"><?= __('Modificado Por') ?></dt>
            <dd><?= $this->Number->format($editora->modificado_por) ?></dd>
            <dt scope="row"><?= __('Created') ?></dt>
            <dd><?= h($editora->created) ?></dd>
            <dt scope="row"><?= __('Modified') ?></dt>
            <dd><?= h($editora->modified) ?></dd>
          </dl>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-share-alt"></i>
          <h3 class="box-title"><?= __('Livros') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <?php if (!empty($editora->livros)): ?>
          <table class="table table-hover">
              <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Editora Id') ?></th>
                    <th scope="col"><?= __('Categoria Id') ?></th>
                    <th scope="col"><?= __('Nome') ?></th>
                    <th scope="col"><?= __('Assunto') ?></th>
                    <th scope="col"><?= __('Autor') ?></th>
                    <th scope="col"><?= __('Situacao Id') ?></th>
                    <th scope="col"><?= __('Cadastrado Por') ?></th>
                    <th scope="col"><?= __('Created') ?></th>
                    <th scope="col"><?= __('Modificado Por') ?></th>
                    <th scope="col"><?= __('Modified') ?></th>
                    <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
              </tr>
              <?php foreach ($editora->livros as $livros): ?>
              <tr>
                    <td><?= h($livros->id) ?></td>
                    <td><?= h($livros->editora_id) ?></td>
                    <td><?= h($livros->categoria_id) ?></td>
                    <td><?= h($livros->nome) ?></td>
                    <td><?= h($livros->assunto) ?></td>
                    <td><?= h($livros->autor) ?></td>
                    <td><?= h($livros->situacao_id) ?></td>
                    <td><?= h($livros->cadastrado_por) ?></td>
                    <td><?= h($livros->created) ?></td>
                    <td><?= h($livros->modificado_por) ?></td>
                    <td><?= h($livros->modified) ?></td>
                      <td class="actions text-right">
                      <?= $this->Html->link(__('View'), ['controller' => 'Livros', 'action' => 'view', $livros->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Edit'), ['controller' => 'Livros', 'action' => 'edit', $livros->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Delete'), ['controller' => 'Livros', 'action' => 'delete', $livros->id], ['confirm' => __('Are you sure you want to delete # {0}?', $livros->id), 'class'=>'btn btn-danger btn-xs']) ?>
                  </td>
              </tr>
              <?php endforeach; ?>
          </table>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
