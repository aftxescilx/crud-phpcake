<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Institucion Controller
 *
 * @property \App\Model\Table\InstitucionTable $Institucion
 * @method \App\Model\Entity\Institucion[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class InstitucionController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $institucion = $this->paginate($this->Institucion);

        $this->set(compact('institucion'));
    }

    /**
     * View method
     *
     * @param string|null $id Institucion id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $institucion = $this->Institucion->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('institucion'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $institucion = $this->Institucion->newEmptyEntity();
        if ($this->request->is('post')) {
            $institucion = $this->Institucion->patchEntity($institucion, $this->request->getData());
            if ($this->Institucion->save($institucion)) {
                $this->Flash->success(__('The institucion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The institucion could not be saved. Please, try again.'));
        }
        $this->set(compact('institucion'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Institucion id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $institucion = $this->Institucion->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $institucion = $this->Institucion->patchEntity($institucion, $this->request->getData());
            if ($this->Institucion->save($institucion)) {
                $this->Flash->success(__('The institucion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The institucion could not be saved. Please, try again.'));
        }
        $this->set(compact('institucion'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Institucion id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $institucion = $this->Institucion->get($id);
        if ($this->Institucion->delete($institucion)) {
            $this->Flash->success(__('The institucion has been deleted.'));
        } else {
            $this->Flash->error(__('The institucion could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
