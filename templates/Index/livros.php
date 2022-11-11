<!-- ======= Counts Section ======= --><br><br><br>
<section id="counts" class="counts section-bg">
    <div class="container">

        <div class="row counters">

            <div class="col-lg-3 col-6 text-center">
                <span data-toggle="counter-up">12332</span>
                <p>Livros</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
                <span data-toggle="counter-up">64</span>
                <p>Novos Livros</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
                <span data-toggle="counter-up">423</span>
                <p>Autores</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
                <span data-toggle="counter-up">145</span>
                <p>Categorias</p>
            </div>
        </div>
    </div>
</section>

<section id="counts" class="counts section-bg">
    <div class="container">
        <div class="row counters">
            <div class="col-12 text-center">
                <span>Qual livro esta buscando?</span>
            </div>
        </div>

        <div class="ibox-content">
            <div class="filtros">
                <form action="<?php echo $this->Url->build(); ?>" method="GET">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <?= $this->Form->control('livro_nome', ['label' => 'Nome do Livro']); ?>
                            </div>
                            <div class="col-sm-6">
                                <?= $this->Form->control('autor', ['label' => 'Autor']); ?>
                            </div>
                            <div class="col-sm-12">
                                <?= $this->Form->control('assunto', ['label' => 'Assunto']); ?>
                            </div>

                            <div class="col-sm-6">
                                <?= $this->Form->control('editora_id', ['label' => 'Editora', 'options' => $editoras, 'empty' => true]); ?>
                            </div>
                            <div class="col-sm-6">
                                <?= $this->Form->control('categoria_id', ['label' => 'Categoria', 'options' => $categorias, 'empty' => true]); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 text-center p-t-25" style="margin-bottom: 10px;">
                        <button type="submit" class="btn btn-info"><i class="fa fa-search">Pesquisar</i></button>
                        <button class="btn btn-warning" onClick="window.location.reload();"><i class="fa fa-refresh">Limpar</i></button>
                    </div>
                    <br>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>

</section>


<!-- End Counts Section -->
<section id="counts" class="counts section-bg">
    <div class="container">
        <div class="boxs-cursos">
            <div class="container">
                <div class="row">
                    <?php
                    foreach ($livros as $livro) : ?>

                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="box-n-agenda">
                                <h2><?= $livro->categoria->nome . ' | ' .  $livro->editora->nome; ?></h2>
                                <h3> <?= $livro->nome ?></h3>
                                <p></p><strong>Autor <?= $livro->autor ?></strong>
                                <h5>Sobre o livro</h5>
                                <p><?= $livro->assunto ?></p><br>

                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>