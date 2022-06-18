<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Caso Controller
 *
 * @property \App\Model\Table\CasoTable $Caso
 * @method \App\Model\Entity\Caso[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CasoController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $caso = $this->paginate($this->Caso);

        $this->set(compact('caso'));
    }

    /**
     * View method
     *
     * @param string|null $id Caso id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $caso = $this->Caso->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('caso'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $caso = $this->Caso->newEmptyEntity();
        if ($this->request->is('post')) {
            $caso = $this->Caso->patchEntity($caso, $this->request->getData());
            if ($this->Caso->save($caso)) {
                $this->Flash->success(__('The caso has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The caso could not be saved. Please, try again.'));
        }
        $this->set(compact('caso'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Caso id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $caso = $this->Caso->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $caso = $this->Caso->patchEntity($caso, $this->request->getData());
            if ($this->Caso->save($caso)) {
                $this->Flash->success(__('The caso has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The caso could not be saved. Please, try again.'));
        }
        $this->set(compact('caso'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Caso id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $caso = $this->Caso->get($id);
        if ($this->Caso->delete($caso)) {
            $this->Flash->success(__('The caso has been deleted.'));
        } else {
            $this->Flash->error(__('The caso could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
