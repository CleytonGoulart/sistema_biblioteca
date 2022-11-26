<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Filtros
  </h1><br>
  <div class="box ibox float-e-margins">
    <div class="ibox-title">
      <h2></h2>
    </div>
    <div class="ibox-content">
      <div class="filtros">
        <form action="<?php echo $this->Url->build(); ?>" method="GET">
          <div class="box-body">
            <div class="col-md-3">
              <?= $this->Form->control('inicio_emprestimo', ['label' => 'Dt. Início Emprestimo', 'type' => 'text', 'class' => 'form-control datepicker', 'value' => '']); ?>
            </div>
            <div class="col-md-3">
              <?= $this->Form->control('fim_emprestimo', ['label' => 'Dt. Fim Emprestimo', 'type' => 'text', 'class' => 'form-control datepicker', 'value' => '']); ?>
            </div>
            <div class="col-md-3">
              <?= $this->Form->control('inicio_devolucao', ['label' => 'Dt. Início Devolução', 'type' => 'text', 'class' => 'form-control datepicker', 'value' => '']); ?>
            </div>
            <div class="col-md-3">
              <?= $this->Form->control('fim_devolucao', ['label' => 'Dt. Fim Devolução', 'type' => 'text', 'class' => 'form-control datepicker', 'value' => '']); ?>
            </div>
            <div class="col-md-6">
              <?= $this->Form->control('cliente_id', ['label' => 'Aluno', 'class' => 'select2', 'multiple' => 'multiple', 'options' => $clientes, 'empty' => '']); ?>
            </div>
      
            <div class="col-md-6">
              <?= $this->Form->control('livro_id', ['label' => 'Livro', 'class' => 'select2', 'multiple' => 'multiple', 'options' => $livros, 'empty' => '']); ?>
            </div>
               <div class="clearfix"></div>
          </div>
          <div class="col-md-12 text-center p-t-25" style="margin-bottom: 10px;">
            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
            <button class="btn btn-default" onClick="window.location.reload();"><i class="fa fa-refresh"></i></button>
           
          </div>
          <br>
          <div class="clearfix"></div>
        </form>
      </div>
    </div>
  </div>
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
                <th scope="col"><?= $this->Paginator->sort('cliente_id', 'Aluno') ?></th>
                <th scope="col"><?= $this->Paginator->sort('livro_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_emprestimo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_devolucao', 'Dt. Devolução') ?></th>

                <th scope="col" class="actions text-center"><?= __('Ações') ?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($emprestimos as $emprestimo) : ?>
                <tr>
                  <td><?= $this->Number->format($emprestimo->id) ?></td>
                  <td><?= h($emprestimo->cliente->nome) ?></td>
                  <td><?= h($emprestimo->livro->nome) ?></td>
                  <td><?= h($emprestimo->data_emprestimo) ?></td>
                  <td><?= h($emprestimo->data_devolucao) ?></td>
                  <td class="actions text-center">
                    <?php if($emprestimo->emprestimo_situacao_id == 1): ?>
                    <?= $this->Form->postLink(__('Devolução'), ['action' => 'devolucao', $emprestimo->id], ['confirm' => __('Deseja confirmar a devolução do Livro # {0}?', $emprestimo->id), 'class' => 'btn btn-info btn-xs']) ?>
                    <?php endif; ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $emprestimo->id], ['class' => 'btn btn-warning btn-xs']) ?>
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $emprestimo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $emprestimo->id), 'class' => 'btn btn-danger btn-xs']) ?>
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