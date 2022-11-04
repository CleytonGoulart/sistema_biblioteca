<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Livros

    <div class="pull-right"><?php echo $this->Html->link(__('Cadastrar'), ['action' => 'add'], ['class'=>'btn btn-success btn-xs']) ?></div>
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?php echo __(''); ?></h3>

          <div class="box-tools">
            <form action="<?php echo $this->Url->build(); ?>" method="POST">
              <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="table_search" class="form-control pull-right" placeholder="<?php echo __('Search'); ?>">

                <div class="input-group-btn">
                  <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <thead>
              <tr>
                  <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('editora_id') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('categoria_id') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                  
                  <th scope="col"><?= $this->Paginator->sort('autor') ?></th>
                  
                  <th scope="col" class="actions text-center"><?= __('Ação') ?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($livros as $livro): ?>
                <tr>
                  <td><?= $this->Number->format($livro->id) ?></td>
                  <td><?= $this->Number->format($livro->editora_id) ?></td>
                  <td><?= $this->Number->format($livro->categoria_id) ?></td>
                  <td><?= h($livro->nome) ?></td>        
                  <td><?= h($livro->autor) ?></td>
                  <td class="actions text-center">
                      <?= $this->Html->link(__('Editar'), ['action' => 'edit', $livro->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $livro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $livro->id), 'class'=>'btn btn-danger btn-xs']) ?>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
</section>