<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Empleadoinstitucion Controller
 *
 * @property \App\Model\Table\EmpleadoinstitucionTable $Empleadoinstitucion
 * @method \App\Model\Entity\Empleadoinstitucion[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EmpleadoinstitucionController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $empleadoinstitucion = $this->paginate($this->Empleadoinstitucion);

        $this->set(compact('empleadoinstitucion'));
    }

    /**
     * View method
     *
     * @param string|null $id Empleadoinstitucion id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $empleadoinstitucion = $this->Empleadoinstitucion->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('empleadoinstitucion'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $empleadoinstitucion = $this->Empleadoinstitucion->newEmptyEntity();
        if ($this->request->is('post')) {
            $empleadoinstitucion = $this->Empleadoinstitucion->patchEntity($empleadoinstitucion, $this->request->getData());
            if ($this->Empleadoinstitucion->save($empleadoinstitucion)) {
                $this->Flash->success(__('The empleadoinstitucion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The empleadoinstitucion could not be saved. Please, try again.'));
        }
        $this->set(compact('empleadoinstitucion'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Empleadoinstitucion id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $empleadoinstitucion = $this->Empleadoinstitucion->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $empleadoinstitucion = $this->Empleadoinstitucion->patchEntity($empleadoinstitucion, $this->request->getData());
            if ($this->Empleadoinstitucion->save($empleadoinstitucion)) {
                $this->Flash->success(__('The empleadoinstitucion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The empleadoinstitucion could not be saved. Please, try again.'));
        }
        $this->set(compact('empleadoinstitucion'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Empleadoinstitucion id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $empleadoinstitucion = $this->Empleadoinstitucion->get($id);
        if ($this->Empleadoinstitucion->delete($empleadoinstitucion)) {
            $this->Flash->success(__('The empleadoinstitucion has been deleted.'));
        } else {
            $this->Flash->error(__('The empleadoinstitucion could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
