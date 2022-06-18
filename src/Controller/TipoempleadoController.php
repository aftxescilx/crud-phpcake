<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Tipoempleado Controller
 *
 * @property \App\Model\Table\TipoempleadoTable $Tipoempleado
 * @method \App\Model\Entity\Tipoempleado[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TipoempleadoController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $tipoempleado = $this->paginate($this->Tipoempleado);

        $this->set(compact('tipoempleado'));
    }

    /**
     * View method
     *
     * @param string|null $id Tipoempleado id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tipoempleado = $this->Tipoempleado->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('tipoempleado'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tipoempleado = $this->Tipoempleado->newEmptyEntity();
        if ($this->request->is('post')) {
            $tipoempleado = $this->Tipoempleado->patchEntity($tipoempleado, $this->request->getData());
            if ($this->Tipoempleado->save($tipoempleado)) {
                $this->Flash->success(__('The tipoempleado has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipoempleado could not be saved. Please, try again.'));
        }
        $this->set(compact('tipoempleado'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipoempleado id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tipoempleado = $this->Tipoempleado->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tipoempleado = $this->Tipoempleado->patchEntity($tipoempleado, $this->request->getData());
            if ($this->Tipoempleado->save($tipoempleado)) {
                $this->Flash->success(__('The tipoempleado has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipoempleado could not be saved. Please, try again.'));
        }
        $this->set(compact('tipoempleado'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipoempleado id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tipoempleado = $this->Tipoempleado->get($id);
        if ($this->Tipoempleado->delete($tipoempleado)) {
            $this->Flash->success(__('The tipoempleado has been deleted.'));
        } else {
            $this->Flash->error(__('The tipoempleado could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
