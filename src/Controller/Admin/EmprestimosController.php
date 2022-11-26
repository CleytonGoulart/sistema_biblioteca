<?php

declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Emprestimos Controller
 *
 * @property \App\Model\Table\EmprestimosTable $Emprestimos
 * @method \App\Model\Entity\Emprestimo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EmprestimosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Emprestimos->find('all')
            ->contain(['Clientes', 'Livros'])
            ->where(['Emprestimos.situacao_id' => 1])
            ->order(['Emprestimos.emprestimo_situacao_id' => 'ASC']);
         
   
        //filtro de alunos 
        if ($this->request->getQuery('cliente_id')) {
            $cliente_id = $this->request->getQuery('cliente_id');
            $query->andWhere(['Emprestimos.cliente_id IN' => $cliente_id]);
        }
        if ($this->request->getQuery('livro_id')) {
            $livro_id = $this->request->getQuery('livro_id');
            $query->andWhere(['Emprestimos.livro_id IN' => $livro_id]);
        }

        //Filtro de data de inicio do emprestimo
        if ($this->request->getQuery('inicio_emprestimo')) {
            $inicio = implode('-', array_reverse(explode('/',  $this->request->getQuery('inicio_emprestimo'))));
            $query->andWhere(['Emprestimos.data_emprestimo >=' => $inicio]);
        }
        // Filtro de data de fim de emprestimo
        if ($this->request->getQuery('fim_emprestimo')) {
            $fim = implode('-', array_reverse(explode('/',  $this->request->getQuery('fim_emprestimo'))));
            $query->andWhere(['Emprestimos.data_emprestimo  <=' => $fim]);
        }

        //Filtro de data de inicio do devolucao
        if ($this->request->getQuery('inicio_devolucao')) {
            $inicio = implode('-', array_reverse(explode('/',  $this->request->getQuery('inicio_devolucao'))));
            $query->andWhere(['Emprestimos.data_devolucao >=' => $inicio]);
        }
        // Filtro de data de fim de devolucao
        if ($this->request->getQuery('fim_devolucao')) {
            $fim = implode('-', array_reverse(explode('/',  $this->request->getQuery('fim_devolucao'))));
            $query->andWhere(['Emprestimos.data_devolucao  <=' => $fim]);
        }

        $this->paginate = [
            'contain' => ['Clientes', 'Livros', 'Usuarios'],
        ];
        $emprestimos = $this->paginate($query);

        // debug($query);
        $clientes = $this->Emprestimos->Clientes->find('list', ['limit' => 200]);
        $livros = $this->Emprestimos->Livros->find('list', ['limit' => 200]);
        $this->set(compact('emprestimos', 'clientes', 'livros'));
    }

    /**
     * View method
     *
     * @param string|null $id Emprestimo id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $emprestimo = $this->Emprestimos->get($id, [
            'contain' => ['Clientes', 'Livros', 'Usuarios'],
        ]);

        $this->set(compact('emprestimo'));
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $emprestimo = $this->Emprestimos->newEmptyEntity();
        if ($this->request->is('post')) {
            $emprestimo = $this->Emprestimos->patchEntity($emprestimo, $this->request->getData());
            $emprestimo->data_emprestimo = date('Y-m-d H:i:s');
            if ($this->Emprestimos->save($emprestimo)) {
                $this->Flash->success(__('Emprestimo, realizado com Sucesso'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Aconteceu um erro, entre em contato com o suporte.'));
        }
        $clientes = $this->Emprestimos->Clientes->find('list', ['limit' => 200]);
        $livros = $this->Emprestimos->Livros->find('list', ['limit' => 200]);
        $usuarios = $this->Emprestimos->Usuarios->find('list', ['limit' => 200]);
        $this->set(compact('emprestimo', 'clientes', 'livros', 'usuarios'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Emprestimo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $emprestimo = $this->Emprestimos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $emprestimo = $this->Emprestimos->patchEntity($emprestimo, $this->request->getData());
            if ($this->Emprestimos->save($emprestimo)) {
                $this->Flash->success(__('Emprestimo, realizado com Sucesso'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Aconteceu um erro, entre em contato com o suporte.'));
        }
        $clientes = $this->Emprestimos->Clientes->find('list', ['limit' => 200]);
        $livros = $this->Emprestimos->Livros->find('list', ['limit' => 200]);
        $usuarios = $this->Emprestimos->Usuarios->find('list', ['limit' => 200]);
        $this->set(compact('emprestimo', 'clientes', 'livros', 'usuarios'));
    }



    /**
     * Delete method
     *
     * @param string|null $id Emprestimo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $emprestimo = $this->Emprestimos->get($id);
        if ($this->Emprestimos->delete($emprestimo)) {
            $this->Flash->success(__('Deletado com Sucesso'));
        } else {
            $this->Flash->error(__('Aconteceu um erro, entre em contato com o suporte.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    /*
    *Devolcao dos livros 
    */
    public function devolucao($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $emprestimo = $this->Emprestimos->get($id);
        $emprestimo->emprestimo_situacao_id = 2;
        $emprestimo->data_devolucao = date('Y-m-d H:i:s');
        if ($this->Emprestimos->save($emprestimo)) {
            $this->Flash->success(__('Livro devolvido.'));
        } else {
            $this->Flash->error(__('Aconteceu um erro, entre em contato com o suporte.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
