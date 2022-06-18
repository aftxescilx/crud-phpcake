<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Donacion Controller
 *
 * @property \App\Model\Table\DonacionTable $Donacion
 * @method \App\Model\Entity\Donacion[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DonacionController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $donacion = $this->paginate($this->Donacion);

        $this->set(compact('donacion'));
    }

    /**
     * View method
     *
     * @param string|null $id Donacion id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $donacion = $this->Donacion->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('donacion'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $donacion = $this->Donacion->newEmptyEntity();
        if ($this->request->is('post')) {
            $donacion = $this->Donacion->patchEntity($donacion, $this->request->getData());
            if ($this->Donacion->save($donacion)) {
                $this->Flash->success(__('The donacion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The donacion could not be saved. Please, try again.'));
        }
        $this->set(compact('donacion'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Donacion id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $donacion = $this->Donacion->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $donacion = $this->Donacion->patchEntity($donacion, $this->request->getData());
            if ($this->Donacion->save($donacion)) {
                $this->Flash->success(__('The donacion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The donacion could not be saved. Please, try again.'));
        }
        $this->set(compact('donacion'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Donacion id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $donacion = $this->Donacion->get($id);
        if ($this->Donacion->delete($donacion)) {
            $this->Flash->success(__('The donacion has been deleted.'));
        } else {
            $this->Flash->error(__('The donacion could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
