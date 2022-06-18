<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Tipopase Controller
 *
 * @property \App\Model\Table\TipopaseTable $Tipopase
 * @method \App\Model\Entity\Tipopase[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TipopaseController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $tipopase = $this->paginate($this->Tipopase);

        $this->set(compact('tipopase'));
    }

    /**
     * View method
     *
     * @param string|null $id Tipopase id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tipopase = $this->Tipopase->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('tipopase'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tipopase = $this->Tipopase->newEmptyEntity();
        if ($this->request->is('post')) {
            $tipopase = $this->Tipopase->patchEntity($tipopase, $this->request->getData());
            if ($this->Tipopase->save($tipopase)) {
                $this->Flash->success(__('The tipopase has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipopase could not be saved. Please, try again.'));
        }
        $this->set(compact('tipopase'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipopase id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tipopase = $this->Tipopase->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tipopase = $this->Tipopase->patchEntity($tipopase, $this->request->getData());
            if ($this->Tipopase->save($tipopase)) {
                $this->Flash->success(__('The tipopase has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipopase could not be saved. Please, try again.'));
        }
        $this->set(compact('tipopase'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipopase id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tipopase = $this->Tipopase->get($id);
        if ($this->Tipopase->delete($tipopase)) {
            $this->Flash->success(__('The tipopase has been deleted.'));
        } else {
            $this->Flash->error(__('The tipopase could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
