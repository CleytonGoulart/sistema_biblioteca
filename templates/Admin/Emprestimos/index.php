<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Emprestimos

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
                  <th scope="col"><?= $this->Paginator->sort('cliente_id') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('livro_id') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('data_emprestimo') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('emprestimo_funcionario_id') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('data_devolucao','Dt. Devolução') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('devolucao_funcionario_id','Devolução Funcionário') ?></th>
                  
                  <th scope="col" class="actions text-center"><?= __('Ações') ?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($emprestimos as $emprestimo): ?>
                <tr>
                  <td><?= $this->Number->format($emprestimo->id) ?></td>
                  <td><?= $this->Number->format($emprestimo->cliente_id) ?></td>
                  <td><?= $this->Number->format($emprestimo->livro_id) ?></td>
                  <td><?= h($emprestimo->data_emprestimo) ?></td>
                  <td><?= $this->Number->format($emprestimo->emprestimo_funcionario_id) ?></td>
                  <td><?= h($emprestimo->data_devolucao) ?></td>
                  <td><?= $this->Number->format($emprestimo->devolucao_funcionario_id) ?></td>
                  <td class="actions text-right">
                      <?= $this->Html->link(__('Editar'), ['action' => 'edit', $emprestimo->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $emprestimo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $emprestimo->id), 'class'=>'btn btn-danger btn-xs']) ?>
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