<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Editoras de Livros

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

         
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <thead>
              <tr>
                  <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
            
                  <th scope="col" class="actions text-center"><?= __('Ações') ?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($editoras as $editora): ?>
                <tr>
                  <td><?= $this->Number->format($editora->id) ?></td>
                  <td><?= h($editora->nome) ?></td>
             
                  <td class="actions text-center">
                      <?= $this->Html->link(__('Editar'), ['action' => 'edit', $editora->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $editora->id], ['confirm' => __('Tem certeza de que deseja excluir a editora {0}?', $editora->nome), 'class'=>'btn btn-danger btn-xs']) ?>
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