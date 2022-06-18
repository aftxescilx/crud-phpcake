<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Reactivo Controller
 *
 * @property \App\Model\Table\ReactivoTable $Reactivo
 * @method \App\Model\Entity\Reactivo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ReactivoController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $reactivo = $this->paginate($this->Reactivo);

        $this->set(compact('reactivo'));
    }

    /**
     * View method
     *
     * @param string|null $id Reactivo id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $reactivo = $this->Reactivo->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('reactivo'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $reactivo = $this->Reactivo->newEmptyEntity();
        if ($this->request->is('post')) {
            $reactivo = $this->Reactivo->patchEntity($reactivo, $this->request->getData());
            if ($this->Reactivo->save($reactivo)) {
                $this->Flash->success(__('The reactivo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The reactivo could not be saved. Please, try again.'));
        }
        $this->set(compact('reactivo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Reactivo id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $reactivo = $this->Reactivo->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $reactivo = $this->Reactivo->patchEntity($reactivo, $this->request->getData());
            if ($this->Reactivo->save($reactivo)) {
                $this->Flash->success(__('The reactivo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The reactivo could not be saved. Please, try again.'));
        }
        $this->set(compact('reactivo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Reactivo id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $reactivo = $this->Reactivo->get($id);
        if ($this->Reactivo->delete($reactivo)) {
            $this->Flash->success(__('The reactivo has been deleted.'));
        } else {
            $this->Flash->error(__('The reactivo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
