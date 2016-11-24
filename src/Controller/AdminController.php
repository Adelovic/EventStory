<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Admin Controller
 *
 * @property \App\Model\Table\AdminTable $Admin
 */
class AdminController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow(['index']);
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $admin = $this->paginate($this->Admin);

        $this->set(compact('admin'));
        $this->set('_serialize', ['admin']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $admin = $this->Admin->newEntity();
        if ($this->request->is('post')) 
        {
            $admin = $this->Admin->patchEntity($admin, $this->request->data);
            if ($this->Admin->save($admin)) 
            {
                $this->Flash->success(__('The admin has been saved.'));
                return $this->redirect(['action' => 'index']);
            } 
            else 
            {
                $this->Flash->error(__('The admin could not be saved. Please, try again.'));
            }
        }
    }

    public function login()
    {

    }
}
