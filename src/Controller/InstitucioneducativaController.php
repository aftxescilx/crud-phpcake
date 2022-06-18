<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Institucioneducativa Controller
 *
 * @property \App\Model\Table\InstitucioneducativaTable $Institucioneducativa
 * @method \App\Model\Entity\Institucioneducativa[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class InstitucioneducativaController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $institucioneducativa = $this->paginate($this->Institucioneducativa);

        $this->set(compact('institucioneducativa'));
    }

    /**
     * View method
     *
     * @param string|null $id Institucioneducativa id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $institucioneducativa = $this->Institucioneducativa->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('institucioneducativa'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $institucioneducativa = $this->Institucioneducativa->newEmptyEntity();
        if ($this->request->is('post')) {
            $institucioneducativa = $this->Institucioneducativa->patchEntity($institucioneducativa, $this->request->getData());
            if ($this->Institucioneducativa->save($institucioneducativa)) {
                $this->Flash->success(__('The institucioneducativa has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The institucioneducativa could not be saved. Please, try again.'));
        }
        $this->set(compact('institucioneducativa'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Institucioneducativa id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $institucioneducativa = $this->Institucioneducativa->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $institucioneducativa = $this->Institucioneducativa->patchEntity($institucioneducativa, $this->request->getData());
            if ($this->Institucioneducativa->save($institucioneducativa)) {
                $this->Flash->success(__('The institucioneducativa has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The institucioneducativa could not be saved. Please, try again.'));
        }
        $this->set(compact('institucioneducativa'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Institucioneducativa id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $institucioneducativa = $this->Institucioneducativa->get($id);
        if ($this->Institucioneducativa->delete($institucioneducativa)) {
            $this->Flash->success(__('The institucioneducativa has been deleted.'));
        } else {
            $this->Flash->error(__('The institucioneducativa could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
