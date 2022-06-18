<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Departamentoreactivo Controller
 *
 * @property \App\Model\Table\DepartamentoreactivoTable $Departamentoreactivo
 * @method \App\Model\Entity\Departamentoreactivo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DepartamentoreactivoController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $departamentoreactivo = $this->paginate($this->Departamentoreactivo);

        $this->set(compact('departamentoreactivo'));
    }

    /**
     * View method
     *
     * @param string|null $id Departamentoreactivo id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $departamentoreactivo = $this->Departamentoreactivo->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('departamentoreactivo'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $departamentoreactivo = $this->Departamentoreactivo->newEmptyEntity();
        if ($this->request->is('post')) {
            $departamentoreactivo = $this->Departamentoreactivo->patchEntity($departamentoreactivo, $this->request->getData());
            if ($this->Departamentoreactivo->save($departamentoreactivo)) {
                $this->Flash->success(__('The departamentoreactivo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The departamentoreactivo could not be saved. Please, try again.'));
        }
        $this->set(compact('departamentoreactivo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Departamentoreactivo id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $departamentoreactivo = $this->Departamentoreactivo->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $departamentoreactivo = $this->Departamentoreactivo->patchEntity($departamentoreactivo, $this->request->getData());
            if ($this->Departamentoreactivo->save($departamentoreactivo)) {
                $this->Flash->success(__('The departamentoreactivo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The departamentoreactivo could not be saved. Please, try again.'));
        }
        $this->set(compact('departamentoreactivo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Departamentoreactivo id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $departamentoreactivo = $this->Departamentoreactivo->get($id);
        if ($this->Departamentoreactivo->delete($departamentoreactivo)) {
            $this->Flash->success(__('The departamentoreactivo has been deleted.'));
        } else {
            $this->Flash->error(__('The departamentoreactivo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
