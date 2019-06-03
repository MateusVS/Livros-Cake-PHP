<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Autores Controller
 *
 * @property \App\Model\Table\AutoresTable $Autores
 *
 * @method \App\Model\Entity\Autore[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AutoresController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $autores = $this->paginate($this->Autores);

        $this->set(compact('autores'));
    }

    /**
     * View method
     *
     * @param string|null $id Autore id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $autore = $this->Autores->get($id, [
            'contain' => []
        ]);

        $this->set('autore', $autore);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $autore = $this->Autores->newEntity();
        if ($this->request->is('post')) {
            $autore = $this->Autores->patchEntity($autore, $this->request->getData());
            if ($this->Autores->save($autore)) {
                $this->Flash->success(__('The autore has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The autore could not be saved. Please, try again.'));
        }
        $this->set(compact('autore'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Autore id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $autore = $this->Autores->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $autore = $this->Autores->patchEntity($autore, $this->request->getData());
            if ($this->Autores->save($autore)) {
                $this->Flash->success(__('The autore has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The autore could not be saved. Please, try again.'));
        }
        $this->set(compact('autore'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Autore id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $autore = $this->Autores->get($id);
        if ($this->Autores->delete($autore)) {
            $this->Flash->success(__('The autore has been deleted.'));
        } else {
            $this->Flash->error(__('The autore could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
