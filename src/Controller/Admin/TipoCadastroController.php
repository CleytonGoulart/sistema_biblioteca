<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * TipoCadastro Controller
 *
 * @property \App\Model\Table\TipoCadastroTable $TipoCadastro
 * @method \App\Model\Entity\TipoCadastro[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TipoCadastroController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $tipoCadastro = $this->paginate($this->TipoCadastro);

        $this->set(compact('tipoCadastro'));
    }

    /**
     * View method
     *
     * @param string|null $id Tipo Cadastro id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tipoCadastro = $this->TipoCadastro->get($id, [
            'contain' => ['Clientes'],
        ]);

        $this->set(compact('tipoCadastro'));
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tipoCadastro = $this->TipoCadastro->newEmptyEntity();
        if ($this->request->is('post')) {
            $tipoCadastro = $this->TipoCadastro->patchEntity($tipoCadastro, $this->request->getData());
            if ($this->TipoCadastro->save($tipoCadastro)) {
                $this->Flash->success(__('The {0} has been saved.', 'Tipo Cadastro'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Tipo Cadastro'));
        }
        $this->set(compact('tipoCadastro'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Tipo Cadastro id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tipoCadastro = $this->TipoCadastro->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tipoCadastro = $this->TipoCadastro->patchEntity($tipoCadastro, $this->request->getData());
            if ($this->TipoCadastro->save($tipoCadastro)) {
                $this->Flash->success(__('The {0} has been saved.', 'Tipo Cadastro'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Tipo Cadastro'));
        }
        $this->set(compact('tipoCadastro'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Tipo Cadastro id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tipoCadastro = $this->TipoCadastro->get($id);
        if ($this->TipoCadastro->delete($tipoCadastro)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Tipo Cadastro'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Tipo Cadastro'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
