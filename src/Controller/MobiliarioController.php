<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Mobiliario Controller
 *
 * @property \App\Model\Table\MobiliarioTable $Mobiliario
 * @method \App\Model\Entity\Mobiliario[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MobiliarioController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $mobiliario = $this->paginate($this->Mobiliario);

        $this->set(compact('mobiliario'));
    }

    /**
     * View method
     *
     * @param string|null $id Mobiliario id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mobiliario = $this->Mobiliario->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('mobiliario'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mobiliario = $this->Mobiliario->newEmptyEntity();
        if ($this->request->is('post')) {
            $mobiliario = $this->Mobiliario->patchEntity($mobiliario, $this->request->getData());
            if ($this->Mobiliario->save($mobiliario)) {
                $this->Flash->success(__('The mobiliario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mobiliario could not be saved. Please, try again.'));
        }
        $this->set(compact('mobiliario'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Mobiliario id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mobiliario = $this->Mobiliario->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mobiliario = $this->Mobiliario->patchEntity($mobiliario, $this->request->getData());
            if ($this->Mobiliario->save($mobiliario)) {
                $this->Flash->success(__('The mobiliario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mobiliario could not be saved. Please, try again.'));
        }
        $this->set(compact('mobiliario'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Mobiliario id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mobiliario = $this->Mobiliario->get($id);
        if ($this->Mobiliario->delete($mobiliario)) {
            $this->Flash->success(__('The mobiliario has been deleted.'));
        } else {
            $this->Flash->error(__('The mobiliario could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
