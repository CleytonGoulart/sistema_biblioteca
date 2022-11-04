<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Livros Controller
 *
 * @property \App\Model\Table\LivrosTable $Livros
 * @method \App\Model\Entity\Livro[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LivrosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Editoras', 'Categorias', 'Situacoes'],
        ];
        $livros = $this->paginate($this->Livros);

        $this->set(compact('livros'));
    }

    /**
     * View method
     *
     * @param string|null $id Livro id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $livro = $this->Livros->get($id, [
            'contain' => ['Editoras', 'Categorias', 'Situacoes'],
        ]);

        $this->set(compact('livro'));
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $livro = $this->Livros->newEmptyEntity();
        if ($this->request->is('post')) {
            $livro = $this->Livros->patchEntity($livro, $this->request->getData());
            if ($this->Livros->save($livro)) {
                $this->Flash->success(__('The {0} has been saved.', 'Livro'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Livro'));
        }
        $editoras = $this->Livros->Editoras->find('list', ['limit' => 200]);
        $categorias = $this->Livros->Categorias->find('list', ['limit' => 200]);
        $situacoes = $this->Livros->Situacoes->find('list', ['limit' => 200]);
        $this->set(compact('livro', 'editoras', 'categorias', 'situacoes'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Livro id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $livro = $this->Livros->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $livro = $this->Livros->patchEntity($livro, $this->request->getData());
            if ($this->Livros->save($livro)) {
                $this->Flash->success(__('The {0} has been saved.', 'Livro'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Livro'));
        }
        $editoras = $this->Livros->Editoras->find('list', ['limit' => 200]);
        $categorias = $this->Livros->Categorias->find('list', ['limit' => 200]);
        $situacoes = $this->Livros->Situacoes->find('list', ['limit' => 200]);
        $this->set(compact('livro', 'editoras', 'categorias', 'situacoes'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Livro id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $livro = $this->Livros->get($id);
        if ($this->Livros->delete($livro)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Livro'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Livro'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
