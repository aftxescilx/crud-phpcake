<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Donacioninstitucion Controller
 *
 * @property \App\Model\Table\DonacioninstitucionTable $Donacioninstitucion
 * @method \App\Model\Entity\Donacioninstitucion[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DonacioninstitucionController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $donacioninstitucion = $this->paginate($this->Donacioninstitucion);

        $this->set(compact('donacioninstitucion'));
    }

    /**
     * View method
     *
     * @param string|null $id Donacioninstitucion id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $donacioninstitucion = $this->Donacioninstitucion->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('donacioninstitucion'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $donacioninstitucion = $this->Donacioninstitucion->newEmptyEntity();
        if ($this->request->is('post')) {
            $donacioninstitucion = $this->Donacioninstitucion->patchEntity($donacioninstitucion, $this->request->getData());
            if ($this->Donacioninstitucion->save($donacioninstitucion)) {
                $this->Flash->success(__('The donacioninstitucion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The donacioninstitucion could not be saved. Please, try again.'));
        }
        $this->set(compact('donacioninstitucion'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Donacioninstitucion id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $donacioninstitucion = $this->Donacioninstitucion->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $donacioninstitucion = $this->Donacioninstitucion->patchEntity($donacioninstitucion, $this->request->getData());
            if ($this->Donacioninstitucion->save($donacioninstitucion)) {
                $this->Flash->success(__('The donacioninstitucion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The donacioninstitucion could not be saved. Please, try again.'));
        }
        $this->set(compact('donacioninstitucion'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Donacioninstitucion id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $donacioninstitucion = $this->Donacioninstitucion->get($id);
        if ($this->Donacioninstitucion->delete($donacioninstitucion)) {
            $this->Flash->success(__('The donacioninstitucion has been deleted.'));
        } else {
            $this->Flash->error(__('The donacioninstitucion could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
