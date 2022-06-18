<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Pase Controller
 *
 * @property \App\Model\Table\PaseTable $Pase
 * @method \App\Model\Entity\Pase[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PaseController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $pase = $this->paginate($this->Pase);

        $this->set(compact('pase'));
    }

    /**
     * View method
     *
     * @param string|null $id Pase id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pase = $this->Pase->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('pase'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pase = $this->Pase->newEmptyEntity();
        if ($this->request->is('post')) {
            $pase = $this->Pase->patchEntity($pase, $this->request->getData());
            if ($this->Pase->save($pase)) {
                $this->Flash->success(__('The pase has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pase could not be saved. Please, try again.'));
        }
        $this->set(compact('pase'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Pase id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pase = $this->Pase->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pase = $this->Pase->patchEntity($pase, $this->request->getData());
            if ($this->Pase->save($pase)) {
                $this->Flash->success(__('The pase has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pase could not be saved. Please, try again.'));
        }
        $this->set(compact('pase'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pase id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pase = $this->Pase->get($id);
        if ($this->Pase->delete($pase)) {
            $this->Flash->success(__('The pase has been deleted.'));
        } else {
            $this->Flash->error(__('The pase could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
