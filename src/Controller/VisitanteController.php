<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Visitante Controller
 *
 * @property \App\Model\Table\VisitanteTable $Visitante
 * @method \App\Model\Entity\Visitante[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class VisitanteController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $visitante = $this->paginate($this->Visitante);

        $this->set(compact('visitante'));
    }

    /**
     * View method
     *
     * @param string|null $id Visitante id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $visitante = $this->Visitante->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('visitante'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $visitante = $this->Visitante->newEmptyEntity();
        if ($this->request->is('post')) {
            $visitante = $this->Visitante->patchEntity($visitante, $this->request->getData());
            if ($this->Visitante->save($visitante)) {
                $this->Flash->success(__('The visitante has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The visitante could not be saved. Please, try again.'));
        }
        $this->set(compact('visitante'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Visitante id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $visitante = $this->Visitante->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $visitante = $this->Visitante->patchEntity($visitante, $this->request->getData());
            if ($this->Visitante->save($visitante)) {
                $this->Flash->success(__('The visitante has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The visitante could not be saved. Please, try again.'));
        }
        $this->set(compact('visitante'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Visitante id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $visitante = $this->Visitante->get($id);
        if ($this->Visitante->delete($visitante)) {
            $this->Flash->success(__('The visitante has been deleted.'));
        } else {
            $this->Flash->error(__('The visitante could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
