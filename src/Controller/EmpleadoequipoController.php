<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Empleadoequipo Controller
 *
 * @property \App\Model\Table\EmpleadoequipoTable $Empleadoequipo
 * @method \App\Model\Entity\Empleadoequipo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EmpleadoequipoController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $empleadoequipo = $this->paginate($this->Empleadoequipo);

        $this->set(compact('empleadoequipo'));
    }

    /**
     * View method
     *
     * @param string|null $id Empleadoequipo id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $empleadoequipo = $this->Empleadoequipo->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('empleadoequipo'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $empleadoequipo = $this->Empleadoequipo->newEmptyEntity();
        if ($this->request->is('post')) {
            $empleadoequipo = $this->Empleadoequipo->patchEntity($empleadoequipo, $this->request->getData());
            if ($this->Empleadoequipo->save($empleadoequipo)) {
                $this->Flash->success(__('The empleadoequipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The empleadoequipo could not be saved. Please, try again.'));
        }
        $this->set(compact('empleadoequipo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Empleadoequipo id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $empleadoequipo = $this->Empleadoequipo->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $empleadoequipo = $this->Empleadoequipo->patchEntity($empleadoequipo, $this->request->getData());
            if ($this->Empleadoequipo->save($empleadoequipo)) {
                $this->Flash->success(__('The empleadoequipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The empleadoequipo could not be saved. Please, try again.'));
        }
        $this->set(compact('empleadoequipo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Empleadoequipo id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $empleadoequipo = $this->Empleadoequipo->get($id);
        if ($this->Empleadoequipo->delete($empleadoequipo)) {
            $this->Flash->success(__('The empleadoequipo has been deleted.'));
        } else {
            $this->Flash->error(__('The empleadoequipo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
