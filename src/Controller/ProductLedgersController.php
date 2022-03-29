<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ProductLedgers Controller
 *
 * @property \App\Model\Table\ProductLedgersTable $ProductLedgers
 * @method \App\Model\Entity\ProductLedger[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductLedgersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $productLedgers = $this->paginate($this->ProductLedgers);

        $this->set(compact('productLedgers'));
    }

    /**
     * View method
     *
     * @param string|null $id Product Ledger id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productLedger = $this->ProductLedgers->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('productLedger'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $productLedger = $this->ProductLedgers->newEmptyEntity();
        if ($this->request->is('post')) {
            $productLedger = $this->ProductLedgers->patchEntity($productLedger, $this->request->getData());
            if ($this->ProductLedgers->save($productLedger)) {
                $this->Flash->success(__('The product ledger has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product ledger could not be saved. Please, try again.'));
        }
        $this->set(compact('productLedger'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Product Ledger id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $productLedger = $this->ProductLedgers->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productLedger = $this->ProductLedgers->patchEntity($productLedger, $this->request->getData());
            if ($this->ProductLedgers->save($productLedger)) {
                $this->Flash->success(__('The product ledger has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product ledger could not be saved. Please, try again.'));
        }
        $this->set(compact('productLedger'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Product Ledger id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productLedger = $this->ProductLedgers->get($id);
        if ($this->ProductLedgers->delete($productLedger)) {
            $this->Flash->success(__('The product ledger has been deleted.'));
        } else {
            $this->Flash->error(__('The product ledger could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
