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
        $this->paginate = [
            'contain' => ['Clientes', 'Livros', 'Usuarios'],
        ];
        $emprestimos = $this->paginate($this->Emprestimos);

        $this->set(compact('emprestimos'));
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
            if ($this->Emprestimos->save($emprestimo)) {
                $this->Flash->success(__('The {0} has been saved.', 'Emprestimo'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Emprestimo'));
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
                $this->Flash->success(__('The {0} has been saved.', 'Emprestimo'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Emprestimo'));
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
            $this->Flash->success(__('The {0} has been deleted.', 'Emprestimo'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Emprestimo'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
