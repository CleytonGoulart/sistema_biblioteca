<section class="content-header">
  <h1>
    Cliente
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
            <dd><?= h($cliente->nome) ?></dd>
            <dt scope="row"><?= __('Cpf') ?></dt>
            <dd><?= h($cliente->cpf) ?></dd>
            <dt scope="row"><?= __('Telefone') ?></dt>
            <dd><?= h($cliente->telefone) ?></dd>
            <dt scope="row"><?= __('Email') ?></dt>
            <dd><?= h($cliente->email) ?></dd>
            <dt scope="row"><?= __('Estado') ?></dt>
            <dd><?= h($cliente->estado) ?></dd>
            <dt scope="row"><?= __('Cidade') ?></dt>
            <dd><?= h($cliente->cidade) ?></dd>
            <dt scope="row"><?= __('Bairro') ?></dt>
            <dd><?= h($cliente->bairro) ?></dd>
            <dt scope="row"><?= __('Rua') ?></dt>
            <dd><?= h($cliente->rua) ?></dd>
            <dt scope="row"><?= __('Tipo Cadastro') ?></dt>
            <dd><?= $cliente->has('tipo_cadastro') ? $this->Html->link($cliente->tipo_cadastro->id, ['controller' => 'TipoCadastro', 'action' => 'view', $cliente->tipo_cadastro->id]) : '' ?></dd>
            <dt scope="row"><?= __('Situaco') ?></dt>
            <dd><?= $cliente->has('situaco') ? $this->Html->link($cliente->situaco->id, ['controller' => 'Situacoes', 'action' => 'view', $cliente->situaco->id]) : '' ?></dd>
            <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($cliente->id) ?></dd>
            <dt scope="row"><?= __('Cep') ?></dt>
            <dd><?= $this->Number->format($cliente->cep) ?></dd>
            <dt scope="row"><?= __('Numero') ?></dt>
            <dd><?= $this->Number->format($cliente->numero) ?></dd>
            <dt scope="row"><?= __('Cadastro Completo') ?></dt>
            <dd><?= $this->Number->format($cliente->cadastro_completo) ?></dd>
            <dt scope="row"><?= __('Cadastrado Por') ?></dt>
            <dd><?= $this->Number->format($cliente->cadastrado_por) ?></dd>
            <dt scope="row"><?= __('Modificado Por') ?></dt>
            <dd><?= $this->Number->format($cliente->modificado_por) ?></dd>
            <dt scope="row"><?= __('Data Nascimento') ?></dt>
            <dd><?= h($cliente->data_nascimento) ?></dd>
            <dt scope="row"><?= __('Created') ?></dt>
            <dd><?= h($cliente->created) ?></dd>
            <dt scope="row"><?= __('Modified') ?></dt>
            <dd><?= h($cliente->modified) ?></dd>
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
          <h3 class="box-title"><?= __('Usuarios') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <?php if (!empty($cliente->usuarios)): ?>
          <table class="table table-hover">
              <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Grupo Usuario Id') ?></th>
                    <th scope="col"><?= __('Nome') ?></th>
                    <th scope="col"><?= __('Telefone') ?></th>
                    <th scope="col"><?= __('Email') ?></th>
                    <th scope="col"><?= __('Senha') ?></th>
                    <th scope="col"><?= __('Situacao Id') ?></th>
                    <th scope="col"><?= __('Cliente Id') ?></th>
                    <th scope="col"><?= __('Cadastrado Por') ?></th>
                    <th scope="col"><?= __('Created') ?></th>
                    <th scope="col"><?= __('Modificado Por') ?></th>
                    <th scope="col"><?= __('Modified') ?></th>
                    <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
              </tr>
              <?php foreach ($cliente->usuarios as $usuarios): ?>
              <tr>
                    <td><?= h($usuarios->id) ?></td>
                    <td><?= h($usuarios->grupo_usuario_id) ?></td>
                    <td><?= h($usuarios->nome) ?></td>
                    <td><?= h($usuarios->telefone) ?></td>
                    <td><?= h($usuarios->email) ?></td>
                    <td><?= h($usuarios->senha) ?></td>
                    <td><?= h($usuarios->situacao_id) ?></td>
                    <td><?= h($usuarios->cliente_id) ?></td>
                    <td><?= h($usuarios->cadastrado_por) ?></td>
                    <td><?= h($usuarios->created) ?></td>
                    <td><?= h($usuarios->modificado_por) ?></td>
                    <td><?= h($usuarios->modified) ?></td>
                      <td class="actions text-right">
                      <?= $this->Html->link(__('View'), ['controller' => 'Usuarios', 'action' => 'view', $usuarios->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Edit'), ['controller' => 'Usuarios', 'action' => 'edit', $usuarios->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Delete'), ['controller' => 'Usuarios', 'action' => 'delete', $usuarios->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuarios->id), 'class'=>'btn btn-danger btn-xs']) ?>
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
