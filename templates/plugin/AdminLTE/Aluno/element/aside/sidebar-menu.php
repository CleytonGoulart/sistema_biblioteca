<ul class="sidebar-menu" data-widget="tree">
  <li class="header"></li>
  <li class="treeview">
    <a href="#">
      <i class="fa fa-dashboard"></i> <span>Dashboard</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="<?php echo $this->Url->build('/'); ?>"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
      <li><a href="<?php echo $this->Url->build('/pages/home2'); ?>"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
    </ul>
  </li>
  <li>
    <a href="<?php echo $this->Url->build(['controller' => 'Dashboard', 'action' => 'index']); ?>"><i class="fa fa-graduation-cap"></i> Meus Cursos</a>
  </li>
  <li>
    <a href="<?php echo $this->Url->build(['controller' => 'AgendaCursos', 'action' => 'agenda']); ?>"><i class="fa fa-calendar"></i> Agendas</a>
  </li>

  <!--
  <li class="treeview">
    <a href="#">
      <i class="fa fa-book"></i>
      <span>Cursos</span>
      <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="<?php echo $this->Url->build(['controller' => 'cursos', 'action' => 'index']); ?>"><i class="fa fa-circle-o"></i> Listar</a></li>
      <li><a href="<?php echo $this->Url->build(['controller' => 'cursos', 'action' => 'add']); ?>"><i class="fa fa-circle-o"></i> Cadastrar</a></li>
    </ul>
  </li>
  <li class="treeview">
    <a href="#">
      <i class="fa fa-users"></i>
      <span>Turmas</span>
      <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="<?php echo $this->Url->build(['controller' => 'cursos-turmas', 'action' => 'index']); ?>"><i class="fa fa-circle-o"></i> Listar</a></li>
      <li><a href="<?php echo $this->Url->build(['controller' => 'cursos-turmas', 'action' => 'add']); ?>"><i class="fa fa-circle-o"></i> Cadastrar</a></li>
    </ul>
  </li>
  <li class="treeview">
    <a href="#">
      <i class="fa fa-files-o"></i>
      <span>Disciplinas</span>
      <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="<?php echo $this->Url->build(['controller' => 'curso-disciplinas', 'action' => 'index']); ?>"><i class="fa fa-circle-o"></i> Listar</a></li>
      <li><a href="<?php echo $this->Url->build(['controller' => 'curso-disciplinas', 'action' => 'add']); ?>"><i class="fa fa-circle-o"></i> Cadastrar</a></li>
    </ul>
  </li>
  <li class="treeview">
    <a href="#">
      <i class="fa fa-address-card-o"></i>
      <span>Instrutores Disciplinas</span>
      <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="<?php echo $this->Url->build(['controller' => 'curso-disciplinas-instrutores', 'action' => 'index']); ?>"><i class="fa fa-circle-o"></i> Listar</a></li>
      <li><a href="<?php echo $this->Url->build(['controller' => 'curso-disciplinas-instrutores', 'action' => 'add']); ?>"><i class="fa fa-circle-o"></i> Cadastrar</a></li>
    </ul>
  </li>
-->


  <!--
  <li class="treeview">
    <a href="#">
      <i class="fa fa-calendar"></i>
      <span>Agendas</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="<?php echo $this->Url->build(['controller' => 'agenda-cursos', 'action' => 'index']); ?>"><i class="fa fa-circle-o"></i> Listar</a></li>
      <li><a href="<?php echo $this->Url->build(['controller' => 'agenda-cursos', 'action' => 'add']); ?>"><i class="fa fa-circle-o"></i> Cadastrar</a></li>
      <li><a href="<?php echo $this->Url->build(['controller' => 'cursos-alunos', 'action' => 'index']); ?>"><i class="fa fa-circle-o"></i> Alunos Matriculados</a></li>
      <li><a href="<?php echo $this->Url->build(['controller' => 'cursos-alunos', 'action' => 'add']); ?>"><i class="fa fa-circle-o"></i> Matricular Aluno</a></li>
    </ul>
  </li>

  <li class="treeview">
    <a href="#">
      <i class="fa fa-graduation-cap"></i>
      <span>Instrutores</span>
      <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="<?php echo $this->Url->build(['controller' => 'instrutores', 'action' => 'index']); ?>"><i class="fa fa-circle-o"></i> Listar</a></li>
      <li><a href="<?php echo $this->Url->build(['controller' => 'instrutores', 'action' => 'add']); ?>"><i class="fa fa-circle-o"></i> Cadastrar</a></li>
    </ul>
  </li>
  <li class="treeview">
    <a href="#">
      <i class="fa fa-id-badge"></i>
      <span>Alunos</span>
      <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="<?php echo $this->Url->build(['controller' => 'alunos', 'action' => 'index']); ?>"><i class="fa fa-circle-o"></i> Listar</a></li>
      <li><a href="<?php echo $this->Url->build(['controller' => 'alunos', 'action' => 'add']); ?>"><i class="fa fa-circle-o"></i> Cadastrar</a></li>
    </ul>
  </li>
-->
  <!--
  <li>
    <a href="<?php echo $this->Url->build('/pages/widgets'); ?>">
      <i class="fa fa-th"></i> <span>Widgets</span>
      <span class="pull-right-container">
        <small class="label pull-right bg-green">new</small>
      </span>
    </a>
  </li>
  <li class="treeview">
    <a href="#">
      <i class="fa fa-pie-chart"></i>
      <span>Charts</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="<?php echo $this->Url->build('/pages/charts/chartjs'); ?>"><i class="fa fa-circle-o"></i> ChartJS</a></li>
      <li><a href="<?php echo $this->Url->build('/pages/charts/morris'); ?>"><i class="fa fa-circle-o"></i> Morris</a></li>
      <li><a href="<?php echo $this->Url->build('/pages/charts/flot'); ?>"><i class="fa fa-circle-o"></i> Flot</a></li>
      <li><a href="<?php echo $this->Url->build('/pages/charts/inline'); ?>"><i class="fa fa-circle-o"></i> Inline charts</a></li>
    </ul>
  </li>
  <li class="treeview">
    <a href="#">
      <i class="fa fa-laptop"></i>
      <span>UI Elements</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>                                                                           
    <ul class="treeview-menu">
      <li><i class="fa fa-circle-o"><?php echo $this->Html->link(__('Alunos'), ['controller' => 'alunos', 'action' => 'index']); ?></i></li>
      <li><i class="fa fa-circle-o"><?php echo $this->Html->link(__('Instrutores'), ['controller' => 'alunos', 'action' => 'index']); ?></i></li>
      <li><i class="fa fa-circle-o"><?php echo $this->Html->link(__('Cursos '), ['controller' => 'cursos', 'action' => 'index']); ?></i></li>
      <li><i class="fa fa-circle-o"><?php echo $this->Html->link(__('Agenda Cursos'), ['controller' => 'agenda-cursos', 'action' => 'index']); ?></i></li>
      <li><i class="fa fa-circle-o"><?php echo $this->Html->link(__('Curso Disciplinas'), ['controller' => 'curso-disciplinas', 'action' => 'index']); ?></i></li>
      <li><i class="fa fa-circle-o"><?php echo $this->Html->link(__('Curso Disciplinas Instrutores'), ['controller' => 'curso-disciplinas-instrutores', 'action' => 'index']); ?></i></li>
      <li><i class="fa fa-circle-o"><?php echo $this->Html->link(__('Cursos Alunos'), ['controller' => 'cursos-alunos', 'action' => 'index']); ?></i></li>
      <li><i class="fa fa-circle-o"><?php echo $this->Html->link(__('Cursos Turmas'), ['controller' => 'cursos-turmas', 'action' => 'index']); ?></i></li>
      <li><i class="fa fa-circle-o"><?php echo $this->Html->link(__('Escolaridades'), ['controller' => 'escolaridades', 'action' => 'index']); ?></i></li>

    </ul>
  </li>
  <li class="treeview">
    <a href="#">
      <i class="fa fa-edit"></i> <span>Forms</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="<?php echo $this->Url->build('/pages/forms/general'); ?>"><i class="fa fa-circle-o"></i> General Elements</a></li>
      <li><a href="<?php echo $this->Url->build('/pages/forms/advanced'); ?>"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
      <li><a href="<?php echo $this->Url->build('/pages/forms/editors'); ?>"><i class="fa fa-circle-o"></i> Editors</a></li>
    </ul>
  </li>
  <li class="treeview">
    <a href="#">
      <i class="fa fa-table"></i> <span>Tables</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="<?php echo $this->Url->build('/pages/tables/simple'); ?>"><i class="fa fa-circle-o"></i> Simple tables</a></li>
      <li><a href="<?php echo $this->Url->build('/pages/tables/data'); ?>"><i class="fa fa-circle-o"></i> Data tables</a></li>
    </ul>
  </li>
  <li>
    <a href="<?php echo $this->Url->build('/pages/calendar'); ?>">
      <i class="fa fa-calendar"></i> <span>Calendar</span>
      <span class="pull-right-container">
        <small class="label pull-right bg-red">3</small>
        <small class="label pull-right bg-blue">17</small>
      </span>
    </a>
  </li>
  <li>
    <a href="<?php echo $this->Url->build('/pages/mailbox/mailbox'); ?>">
      <i class="fa fa-envelope"></i> <span>Mailbox</span>
      <span class="pull-right-container">
        <small class="label pull-right bg-yellow">12</small>
        <small class="label pull-right bg-green">16</small>
        <small class="label pull-right bg-red">5</small>
      </span>
    </a>
  </li>
  <li class="treeview">
    <a href="#">
      <i class="fa fa-folder"></i> <span>Examples</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="<?php echo $this->Url->build('/pages/examples/invoice'); ?>"><i class="fa fa-circle-o"></i> Invoice</a></li>
      <li><a href="<?php echo $this->Url->build('/pages/examples/profile'); ?>"><i class="fa fa-circle-o"></i> Profile</a></li>
      <li><a href="<?php echo $this->Url->build('/pages/examples/login'); ?>"><i class="fa fa-circle-o"></i> Login</a></li>
      <li><a href="<?php echo $this->Url->build('/pages/examples/register'); ?>"><i class="fa fa-circle-o"></i> Register</a></li>
      <li><a href="<?php echo $this->Url->build('/pages/examples/lockscreen'); ?>"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
      <li><a href="<?php echo $this->Url->build('/pages/examples/404'); ?>"><i class="fa fa-circle-o"></i> 404 Error</a></li>
      <li><a href="<?php echo $this->Url->build('/pages/examples/500'); ?>"><i class="fa fa-circle-o"></i> 500 Error</a></li>
      <li><a href="<?php echo $this->Url->build('/pages/examples/blank'); ?>"><i class="fa fa-circle-o"></i> Blank Page</a></li>
      <li><a href="<?php echo $this->Url->build('/pages/examples/pace'); ?>"><i class="fa fa-circle-o"></i> Pace Page</a></li>
    </ul>
  </li>
  <li class="treeview">
    <a href="#">
      <i class="fa fa-share"></i> <span>Multilevel</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
      <li class="treeview">
        <a href="#"><i class="fa fa-circle-o"></i> Level One
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
          <li class="treeview">
            <a href="#"><i class="fa fa-circle-o"></i> Level Two
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
            </ul>
          </li>
        </ul>
      </li>
      <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
    </ul>
  </li>

  <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
  <li class="header">LABELS</li>
  <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
  <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
  <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
  <li><a href="<?php echo $this->Url->build('/pages/debug'); ?>"><i class="fa fa-bug"></i> <span>Debug</span></a></li>
-->
</ul>