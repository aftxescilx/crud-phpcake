<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Tipoinstitucion Controller
 *
 * @property \App\Model\Table\TipoinstitucionTable $Tipoinstitucion
 * @method \App\Model\Entity\Tipoinstitucion[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TipoinstitucionController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $tipoinstitucion = $this->paginate($this->Tipoinstitucion);

        $this->set(compact('tipoinstitucion'));
    }

    /**
     * View method
     *
     * @param string|null $id Tipoinstitucion id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tipoinstitucion = $this->Tipoinstitucion->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('tipoinstitucion'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tipoinstitucion = $this->Tipoinstitucion->newEmptyEntity();
        if ($this->request->is('post')) {
            $tipoinstitucion = $this->Tipoinstitucion->patchEntity($tipoinstitucion, $this->request->getData());
            if ($this->Tipoinstitucion->save($tipoinstitucion)) {
                $this->Flash->success(__('The tipoinstitucion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipoinstitucion could not be saved. Please, try again.'));
        }
        $this->set(compact('tipoinstitucion'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipoinstitucion id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tipoinstitucion = $this->Tipoinstitucion->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tipoinstitucion = $this->Tipoinstitucion->patchEntity($tipoinstitucion, $this->request->getData());
            if ($this->Tipoinstitucion->save($tipoinstitucion)) {
                $this->Flash->success(__('The tipoinstitucion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipoinstitucion could not be saved. Please, try again.'));
        }
        $this->set(compact('tipoinstitucion'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipoinstitucion id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tipoinstitucion = $this->Tipoinstitucion->get($id);
        if ($this->Tipoinstitucion->delete($tipoinstitucion)) {
            $this->Flash->success(__('The tipoinstitucion has been deleted.'));
        } else {
            $this->Flash->error(__('The tipoinstitucion could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
