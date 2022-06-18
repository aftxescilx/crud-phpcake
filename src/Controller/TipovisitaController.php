<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Tipovisita Controller
 *
 * @property \App\Model\Table\TipovisitaTable $Tipovisita
 * @method \App\Model\Entity\Tipovisitum[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TipovisitaController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $tipovisita = $this->paginate($this->Tipovisita);

        $this->set(compact('tipovisita'));
    }

    /**
     * View method
     *
     * @param string|null $id Tipovisitum id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tipovisitum = $this->Tipovisita->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('tipovisitum'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tipovisitum = $this->Tipovisita->newEmptyEntity();
        if ($this->request->is('post')) {
            $tipovisitum = $this->Tipovisita->patchEntity($tipovisitum, $this->request->getData());
            if ($this->Tipovisita->save($tipovisitum)) {
                $this->Flash->success(__('The tipovisitum has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipovisitum could not be saved. Please, try again.'));
        }
        $this->set(compact('tipovisitum'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipovisitum id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tipovisitum = $this->Tipovisita->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tipovisitum = $this->Tipovisita->patchEntity($tipovisitum, $this->request->getData());
            if ($this->Tipovisita->save($tipovisitum)) {
                $this->Flash->success(__('The tipovisitum has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipovisitum could not be saved. Please, try again.'));
        }
        $this->set(compact('tipovisitum'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipovisitum id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tipovisitum = $this->Tipovisita->get($id);
        if ($this->Tipovisita->delete($tipovisitum)) {
            $this->Flash->success(__('The tipovisitum has been deleted.'));
        } else {
            $this->Flash->error(__('The tipovisitum could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
