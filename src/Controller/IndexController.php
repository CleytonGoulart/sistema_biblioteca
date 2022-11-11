<?php

declare(strict_types=1);

namespace App\Controller;

class IndexController extends AppController
{
    public function livros()
    {
        $this->loadModel('Livros');
     
      
        $livros = $this->Livros->find()
        ->contain(['Editoras', 'Categorias'])
        ->where(['Livros.situacao_id' => 1]);

        if ($this->request->getQuery('livro_nome')) {
            $livro = $this->request->getQuery('livro_nome');
            $livros->andWhere(['Livros.nome LIKE' => "%$livro%"]);
        }

        if ($this->request->getQuery('autor')) {
            $autor = $this->request->getQuery('autor');
            $livros->andWhere(['Livros.autor LIKE' => "%$autor%"]);
        }

        if ($this->request->getQuery('assunto')) {
            $assunto = $this->request->getQuery('assunto');
            $livros->andWhere(['Livros.assunto LIKE' => "%$assunto%"]);
        }

       if ($this->request->getQuery('editora_id')) {
            $editora_id = $this->request->getQuery('editora_id');
            $livros->andWhere(['Livros.editora_id' => $editora_id]);
        }
        if ($this->request->getQuery('categoria_id')) {
            $categoria_id = $this->request->getQuery('categoria_id');
            $livros->andWhere(['Livros.categoria_id' => $categoria_id]);
        }

        

       $editoras = $this->Livros->Editoras->find('list', ['limit' => 200]);
       $categorias = $this->Livros->Categorias->find('list', ['limit' => 200]);

        $this->set(compact('livros','editoras','categorias'));
    }
    public function index()
    {
    }

    public function cursos()
    {
    }
    public function artigos()
    {
    }
    public function agenda()
    {
        $this->loadModel('AgendaCursos');
        $agendaCursos = $this->AgendaCursos->find()
            ->contain(['CursosTurmas' => ['Cursos']])
            ->where(['AgendaCursos.situacao_id' => 1])->all();


        $this->set(compact('agendaCursos'));
    }

    public function conteudoCurso()
    {
        $this->loadModel('AgendaCursos');       

        $disciplinas = $this->AgendaCursos->find('all')
        ->contain(['CursosTurmas'=> ['Cursos' => ['CursoDisciplinas']]])
        ->where(['Cursos.id' => 1]);
        
        $this->set(compact('disciplinas'));
    }
}
