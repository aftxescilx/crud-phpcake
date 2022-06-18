<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Especialidad Controller
 *
 * @property \App\Model\Table\EspecialidadTable $Especialidad
 * @method \App\Model\Entity\Especialidad[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EspecialidadController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $especialidad = $this->paginate($this->Especialidad);

        $this->set(compact('especialidad'));
    }

    /**
     * View method
     *
     * @param string|null $id Especialidad id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $especialidad = $this->Especialidad->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('especialidad'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $especialidad = $this->Especialidad->newEmptyEntity();
        if ($this->request->is('post')) {
            $especialidad = $this->Especialidad->patchEntity($especialidad, $this->request->getData());
            if ($this->Especialidad->save($especialidad)) {
                $this->Flash->success(__('The especialidad has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The especialidad could not be saved. Please, try again.'));
        }
        $this->set(compact('especialidad'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Especialidad id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $especialidad = $this->Especialidad->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $especialidad = $this->Especialidad->patchEntity($especialidad, $this->request->getData());
            if ($this->Especialidad->save($especialidad)) {
                $this->Flash->success(__('The especialidad has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The especialidad could not be saved. Please, try again.'));
        }
        $this->set(compact('especialidad'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Especialidad id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $especialidad = $this->Especialidad->get($id);
        if ($this->Especialidad->delete($especialidad)) {
            $this->Flash->success(__('The especialidad has been deleted.'));
        } else {
            $this->Flash->error(__('The especialidad could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
