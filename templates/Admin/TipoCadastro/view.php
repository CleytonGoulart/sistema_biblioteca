<section class="content-header">
  <h1>
    Tipo Cadastro
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
            <dd><?= h($tipoCadastro->nome) ?></dd>
            <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($tipoCadastro->id) ?></dd>
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
          <h3 class="box-title"><?= __('Clientes') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <?php if (!empty($tipoCadastro->clientes)): ?>
          <table class="table table-hover">
              <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Nome') ?></th>
                    <th scope="col"><?= __('Data Nascimento') ?></th>
                    <th scope="col"><?= __('Cpf') ?></th>
                    <th scope="col"><?= __('Telefone') ?></th>
                    <th scope="col"><?= __('Email') ?></th>
                    <th scope="col"><?= __('Cep') ?></th>
                    <th scope="col"><?= __('Estado') ?></th>
                    <th scope="col"><?= __('Cidade') ?></th>
                    <th scope="col"><?= __('Bairro') ?></th>
                    <th scope="col"><?= __('Rua') ?></th>
                    <th scope="col"><?= __('Numero') ?></th>
                    <th scope="col"><?= __('Cadastro Completo') ?></th>
                    <th scope="col"><?= __('Tipo Cadastro Id') ?></th>
                    <th scope="col"><?= __('Situacao Id') ?></th>
                    <th scope="col"><?= __('Cadastrado Por') ?></th>
                    <th scope="col"><?= __('Created') ?></th>
                    <th scope="col"><?= __('Modificado Por') ?></th>
                    <th scope="col"><?= __('Modified') ?></th>
                    <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
              </tr>
              <?php foreach ($tipoCadastro->clientes as $clientes): ?>
              <tr>
                    <td><?= h($clientes->id) ?></td>
                    <td><?= h($clientes->nome) ?></td>
                    <td><?= h($clientes->data_nascimento) ?></td>
                    <td><?= h($clientes->cpf) ?></td>
                    <td><?= h($clientes->telefone) ?></td>
                    <td><?= h($clientes->email) ?></td>
                    <td><?= h($clientes->cep) ?></td>
                    <td><?= h($clientes->estado) ?></td>
                    <td><?= h($clientes->cidade) ?></td>
                    <td><?= h($clientes->bairro) ?></td>
                    <td><?= h($clientes->rua) ?></td>
                    <td><?= h($clientes->numero) ?></td>
                    <td><?= h($clientes->cadastro_completo) ?></td>
                    <td><?= h($clientes->tipo_cadastro_id) ?></td>
                    <td><?= h($clientes->situacao_id) ?></td>
                    <td><?= h($clientes->cadastrado_por) ?></td>
                    <td><?= h($clientes->created) ?></td>
                    <td><?= h($clientes->modificado_por) ?></td>
                    <td><?= h($clientes->modified) ?></td>
                      <td class="actions text-right">
                      <?= $this->Html->link(__('View'), ['controller' => 'Clientes', 'action' => 'view', $clientes->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Edit'), ['controller' => 'Clientes', 'action' => 'edit', $clientes->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Delete'), ['controller' => 'Clientes', 'action' => 'delete', $clientes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientes->id), 'class'=>'btn btn-danger btn-xs']) ?>
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
