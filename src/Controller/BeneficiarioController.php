<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Beneficiario Controller
 *
 * @property \App\Model\Table\BeneficiarioTable $Beneficiario
 * @method \App\Model\Entity\Beneficiario[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BeneficiarioController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $beneficiario = $this->paginate($this->Beneficiario);

        $this->set(compact('beneficiario'));
    }

    /**
     * View method
     *
     * @param string|null $id Beneficiario id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $beneficiario = $this->Beneficiario->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('beneficiario'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $beneficiario = $this->Beneficiario->newEmptyEntity();
        if ($this->request->is('post')) {
            $beneficiario = $this->Beneficiario->patchEntity($beneficiario, $this->request->getData());
            if ($this->Beneficiario->save($beneficiario)) {
                $this->Flash->success(__('The beneficiario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The beneficiario could not be saved. Please, try again.'));
        }
        $this->set(compact('beneficiario'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Beneficiario id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $beneficiario = $this->Beneficiario->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $beneficiario = $this->Beneficiario->patchEntity($beneficiario, $this->request->getData());
            if ($this->Beneficiario->save($beneficiario)) {
                $this->Flash->success(__('The beneficiario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The beneficiario could not be saved. Please, try again.'));
        }
        $this->set(compact('beneficiario'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Beneficiario id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $beneficiario = $this->Beneficiario->get($id);
        if ($this->Beneficiario->delete($beneficiario)) {
            $this->Flash->success(__('The beneficiario has been deleted.'));
        } else {
            $this->Flash->error(__('The beneficiario could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
