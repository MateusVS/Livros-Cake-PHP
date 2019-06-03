<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Livros Controller
 *
 * @property \App\Model\Table\LivrosTable $Livros
 *
 * @method \App\Model\Entity\Livro[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LivrosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
       $this->paginate = [
            'contain' => ['Autores']
        ];
        $livros = $this->paginate($this->Livros);

        $this->set(compact('livros'));
    }

    /**
     * View method
     *
     * @param string|null $id Livro id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $livro = $this->Livros->get($id, [
            'contain' => ['Autores']
        ]);

        $this->set('livro', $livro);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $livro = $this->Livros->newEntity();
        if ($this->request->is('post')) {
            $livro = $this->Livros->patchEntity($livro, $this->request->getData());
            if ($this->Livros->save($livro)) {
                $this->Flash->success(__('The livro has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The livro could not be saved. Please, try again.'));
        }
        $autores = $this->Livros->Autores->find('list', ['limit' => 200]);
        $this->set(compact('livro', 'autores'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Livro id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $livro = $this->Livros->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $livro = $this->Livros->patchEntity($livro, $this->request->getData());
            if ($this->Livros->save($livro)) {
                $this->Flash->success(__('The livro has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The livro could not be saved. Please, try again.'));
        }
        $autores = $this->Livros->Autores->find('list', ['limit' => 200]);
        $this->set(compact('livro', 'autores'));
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
            $this->Flash->success(__('The livro has been deleted.'));
        } else {
            $this->Flash->error(__('The livro could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
