<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Tipoinstrumento Controller
 *
 * @property \App\Model\Table\TipoinstrumentoTable $Tipoinstrumento
 * @method \App\Model\Entity\Tipoinstrumento[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TipoinstrumentoController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $tipoinstrumento = $this->paginate($this->Tipoinstrumento);

        $this->set(compact('tipoinstrumento'));
    }

    /**
     * View method
     *
     * @param string|null $id Tipoinstrumento id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tipoinstrumento = $this->Tipoinstrumento->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('tipoinstrumento'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tipoinstrumento = $this->Tipoinstrumento->newEmptyEntity();
        if ($this->request->is('post')) {
            $tipoinstrumento = $this->Tipoinstrumento->patchEntity($tipoinstrumento, $this->request->getData());
            if ($this->Tipoinstrumento->save($tipoinstrumento)) {
                $this->Flash->success(__('The tipoinstrumento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipoinstrumento could not be saved. Please, try again.'));
        }
        $this->set(compact('tipoinstrumento'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipoinstrumento id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tipoinstrumento = $this->Tipoinstrumento->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tipoinstrumento = $this->Tipoinstrumento->patchEntity($tipoinstrumento, $this->request->getData());
            if ($this->Tipoinstrumento->save($tipoinstrumento)) {
                $this->Flash->success(__('The tipoinstrumento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipoinstrumento could not be saved. Please, try again.'));
        }
        $this->set(compact('tipoinstrumento'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipoinstrumento id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tipoinstrumento = $this->Tipoinstrumento->get($id);
        if ($this->Tipoinstrumento->delete($tipoinstrumento)) {
            $this->Flash->success(__('The tipoinstrumento has been deleted.'));
        } else {
            $this->Flash->error(__('The tipoinstrumento could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
