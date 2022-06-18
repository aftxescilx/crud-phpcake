<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Certificado Controller
 *
 * @property \App\Model\Table\CertificadoTable $Certificado
 * @method \App\Model\Entity\Certificado[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CertificadoController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $certificado = $this->paginate($this->Certificado);

        $this->set(compact('certificado'));
    }

    /**
     * View method
     *
     * @param string|null $id Certificado id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $certificado = $this->Certificado->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('certificado'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $certificado = $this->Certificado->newEmptyEntity();
        if ($this->request->is('post')) {
            $certificado = $this->Certificado->patchEntity($certificado, $this->request->getData());
            if ($this->Certificado->save($certificado)) {
                $this->Flash->success(__('The certificado has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The certificado could not be saved. Please, try again.'));
        }
        $this->set(compact('certificado'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Certificado id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $certificado = $this->Certificado->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $certificado = $this->Certificado->patchEntity($certificado, $this->request->getData());
            if ($this->Certificado->save($certificado)) {
                $this->Flash->success(__('The certificado has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The certificado could not be saved. Please, try again.'));
        }
        $this->set(compact('certificado'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Certificado id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $certificado = $this->Certificado->get($id);
        if ($this->Certificado->delete($certificado)) {
            $this->Flash->success(__('The certificado has been deleted.'));
        } else {
            $this->Flash->error(__('The certificado could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
