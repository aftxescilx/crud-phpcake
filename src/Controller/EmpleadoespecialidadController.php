<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Empleadoespecialidad Controller
 *
 * @property \App\Model\Table\EmpleadoespecialidadTable $Empleadoespecialidad
 * @method \App\Model\Entity\Empleadoespecialidad[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EmpleadoespecialidadController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $empleadoespecialidad = $this->paginate($this->Empleadoespecialidad);

        $this->set(compact('empleadoespecialidad'));
    }

    /**
     * View method
     *
     * @param string|null $id Empleadoespecialidad id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $empleadoespecialidad = $this->Empleadoespecialidad->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('empleadoespecialidad'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $empleadoespecialidad = $this->Empleadoespecialidad->newEmptyEntity();
        if ($this->request->is('post')) {
            $empleadoespecialidad = $this->Empleadoespecialidad->patchEntity($empleadoespecialidad, $this->request->getData());
            if ($this->Empleadoespecialidad->save($empleadoespecialidad)) {
                $this->Flash->success(__('The empleadoespecialidad has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The empleadoespecialidad could not be saved. Please, try again.'));
        }
        $this->set(compact('empleadoespecialidad'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Empleadoespecialidad id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $empleadoespecialidad = $this->Empleadoespecialidad->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $empleadoespecialidad = $this->Empleadoespecialidad->patchEntity($empleadoespecialidad, $this->request->getData());
            if ($this->Empleadoespecialidad->save($empleadoespecialidad)) {
                $this->Flash->success(__('The empleadoespecialidad has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The empleadoespecialidad could not be saved. Please, try again.'));
        }
        $this->set(compact('empleadoespecialidad'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Empleadoespecialidad id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $empleadoespecialidad = $this->Empleadoespecialidad->get($id);
        if ($this->Empleadoespecialidad->delete($empleadoespecialidad)) {
            $this->Flash->success(__('The empleadoespecialidad has been deleted.'));
        } else {
            $this->Flash->error(__('The empleadoespecialidad could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
