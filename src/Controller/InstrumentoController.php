<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Instrumento Controller
 *
 * @property \App\Model\Table\InstrumentoTable $Instrumento
 * @method \App\Model\Entity\Instrumento[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class InstrumentoController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $instrumento = $this->paginate($this->Instrumento);

        $this->set(compact('instrumento'));
    }

    /**
     * View method
     *
     * @param string|null $id Instrumento id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $instrumento = $this->Instrumento->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('instrumento'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $instrumento = $this->Instrumento->newEmptyEntity();
        if ($this->request->is('post')) {
            $instrumento = $this->Instrumento->patchEntity($instrumento, $this->request->getData());
            if ($this->Instrumento->save($instrumento)) {
                $this->Flash->success(__('The instrumento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The instrumento could not be saved. Please, try again.'));
        }
        $this->set(compact('instrumento'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Instrumento id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $instrumento = $this->Instrumento->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $instrumento = $this->Instrumento->patchEntity($instrumento, $this->request->getData());
            if ($this->Instrumento->save($instrumento)) {
                $this->Flash->success(__('The instrumento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The instrumento could not be saved. Please, try again.'));
        }
        $this->set(compact('instrumento'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Instrumento id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $instrumento = $this->Instrumento->get($id);
        if ($this->Instrumento->delete($instrumento)) {
            $this->Flash->success(__('The instrumento has been deleted.'));
        } else {
            $this->Flash->error(__('The instrumento could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
