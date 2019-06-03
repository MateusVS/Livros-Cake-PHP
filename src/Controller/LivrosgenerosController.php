<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Livrosgeneros Controller
 *
 * @property \App\Model\Table\LivrosgenerosTable $Livrosgeneros
 *
 * @method \App\Model\Entity\Livrosgenero[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LivrosgenerosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Livros', 'Generos']
        ];
        $livrosgeneros = $this->paginate($this->Livrosgeneros);

        $this->set(compact('livrosgeneros'));
    }

    /**
     * View method
     *
     * @param string|null $id Livrosgenero id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $livrosgenero = $this->Livrosgeneros->get($id, [
            'contain' => ['Livros', 'Generos']
        ]);

        $this->set('livrosgenero', $livrosgenero);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $livrosgenero = $this->Livrosgeneros->newEntity();
        if ($this->request->is('post')) {
            $livrosgenero = $this->Livrosgeneros->patchEntity($livrosgenero, $this->request->getData());
            if ($this->Livrosgeneros->save($livrosgenero)) {
                $this->Flash->success(__('The livrosgenero has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The livrosgenero could not be saved. Please, try again.'));
        }
        $livros = $this->Livrosgeneros->Livros->find('list', ['limit' => 200]);
        $generos = $this->Livrosgeneros->Generos->find('list', ['limit' => 200]);
        $this->set(compact('livrosgenero', 'livros', 'generos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Livrosgenero id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $livrosgenero = $this->Livrosgeneros->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $livrosgenero = $this->Livrosgeneros->patchEntity($livrosgenero, $this->request->getData());
            if ($this->Livrosgeneros->save($livrosgenero)) {
                $this->Flash->success(__('The livrosgenero has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The livrosgenero could not be saved. Please, try again.'));
        }
        $livros = $this->Livrosgeneros->Livros->find('list', ['limit' => 200]);
        $generos = $this->Livrosgeneros->Generos->find('list', ['limit' => 200]);
        $this->set(compact('livrosgenero', 'livros', 'generos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Livrosgenero id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $livrosgenero = $this->Livrosgeneros->get($id);
        if ($this->Livrosgeneros->delete($livrosgenero)) {
            $this->Flash->success(__('The livrosgenero has been deleted.'));
        } else {
            $this->Flash->error(__('The livrosgenero could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
