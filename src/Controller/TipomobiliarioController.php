<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Tipomobiliario Controller
 *
 * @property \App\Model\Table\TipomobiliarioTable $Tipomobiliario
 * @method \App\Model\Entity\Tipomobiliario[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TipomobiliarioController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $tipomobiliario = $this->paginate($this->Tipomobiliario);

        $this->set(compact('tipomobiliario'));
    }

    /**
     * View method
     *
     * @param string|null $id Tipomobiliario id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tipomobiliario = $this->Tipomobiliario->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('tipomobiliario'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tipomobiliario = $this->Tipomobiliario->newEmptyEntity();
        if ($this->request->is('post')) {
            $tipomobiliario = $this->Tipomobiliario->patchEntity($tipomobiliario, $this->request->getData());
            if ($this->Tipomobiliario->save($tipomobiliario)) {
                $this->Flash->success(__('The tipomobiliario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipomobiliario could not be saved. Please, try again.'));
        }
        $this->set(compact('tipomobiliario'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipomobiliario id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tipomobiliario = $this->Tipomobiliario->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tipomobiliario = $this->Tipomobiliario->patchEntity($tipomobiliario, $this->request->getData());
            if ($this->Tipomobiliario->save($tipomobiliario)) {
                $this->Flash->success(__('The tipomobiliario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipomobiliario could not be saved. Please, try again.'));
        }
        $this->set(compact('tipomobiliario'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipomobiliario id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tipomobiliario = $this->Tipomobiliario->get($id);
        if ($this->Tipomobiliario->delete($tipomobiliario)) {
            $this->Flash->success(__('The tipomobiliario has been deleted.'));
        } else {
            $this->Flash->error(__('The tipomobiliario could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
