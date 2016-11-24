<?php

namespace App\Controller;

use Cake\Event\Event;
/**
 * Users Controller.
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow(['login', 'add']);
    }

    /**
     * Index method.
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->set('user', $this->Auth->user());
    }
    /**
     * View method.
     *
     * @param string|null $id User id
     *
     * @return \Cake\Network\Response|null
     *
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method.
     *
     * @return \Cake\Network\Response|void Redirects on successful add
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Inscription réussie'));
            } else {
                $this->Flash->error(__('L\'inscription a échoué, veuillez réessayer'));
            }
        }

        return $this->redirect($this->referer());
    }

    public function login()
    {
        $this->autoRender = false;
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
            } else {
                $this->Flash->error('Votre email ou mot de passe est incorrect');
            }

            return $this->redirect($this->Auth->redirectUrl());
        }
    }

    public function logout()
    {
        $this->Flash->success('Vous êtes maintenant déconnecté.');

        return $this->redirect($this->Auth->logout());
    }

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);

        // Table utilisée pour l'authentification
        $this->Auth->config('authenticate', [
          'Form' => [
             'userModel' => 'Users',
         ]
        ]);
    }

}
