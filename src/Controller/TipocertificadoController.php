<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Tipocertificado Controller
 *
 * @property \App\Model\Table\TipocertificadoTable $Tipocertificado
 * @method \App\Model\Entity\Tipocertificado[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TipocertificadoController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $tipocertificado = $this->paginate($this->Tipocertificado);

        $this->set(compact('tipocertificado'));
    }

    /**
     * View method
     *
     * @param string|null $id Tipocertificado id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tipocertificado = $this->Tipocertificado->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('tipocertificado'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tipocertificado = $this->Tipocertificado->newEmptyEntity();
        if ($this->request->is('post')) {
            $tipocertificado = $this->Tipocertificado->patchEntity($tipocertificado, $this->request->getData());
            if ($this->Tipocertificado->save($tipocertificado)) {
                $this->Flash->success(__('The tipocertificado has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipocertificado could not be saved. Please, try again.'));
        }
        $this->set(compact('tipocertificado'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipocertificado id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tipocertificado = $this->Tipocertificado->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tipocertificado = $this->Tipocertificado->patchEntity($tipocertificado, $this->request->getData());
            if ($this->Tipocertificado->save($tipocertificado)) {
                $this->Flash->success(__('The tipocertificado has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipocertificado could not be saved. Please, try again.'));
        }
        $this->set(compact('tipocertificado'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipocertificado id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tipocertificado = $this->Tipocertificado->get($id);
        if ($this->Tipocertificado->delete($tipocertificado)) {
            $this->Flash->success(__('The tipocertificado has been deleted.'));
        } else {
            $this->Flash->error(__('The tipocertificado could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
