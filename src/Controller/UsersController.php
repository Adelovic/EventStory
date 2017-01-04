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
      $this->loadModel('InvitesFriend');
      $this->loadModel('InvitesEvent');
      $this->loadModel('Pictures');
      $picture = $this->Pictures->get($this->Auth->user()['picture']);
      $this->set('avatar', $picture);
      $eventInvites = $this->InvitesEvent->find('invite', ['user' => $this->Auth->user()['id']])->toArray();
      $friendshipInvites = $this->InvitesFriend->find('invite', ['user' => $this->Auth->user()['id']])->toArray();
      $invites = ['friends' => $friendshipInvites, 'events' => $eventInvites];
      $this->set('invites', $invites);
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
        $userShown = $this->Users->get($id);
        $this->loadModel('InvitesFriend');
        $alreadyInvited = $this->InvitesFriend->exists(['user_inviting' => $this->Auth->user()['id'], 'user_invited' => $userShown['id']]);
        $waitingForAproval = $this->InvitesFriend->exists(['user_inviting' => $userShown['id'], 'user_invited' => $this->Auth->user()['id']]);
        $this->loadModel('Friendships');
        $alreadyBefriendedAsOne = $this->Friendships->exists(['user_one' => $this->Auth->user()['id'], 'user_two' => $userShown['id']]);
        $alreadyBefriendedAsTwo = $this->Friendships->exists(['user_two' => $this->Auth->user()['id'], 'user_one' => $userShown['id']]);
        $alreadyBefriended = $alreadyBefriendedAsOne || $alreadyBefriendedAsTwo;
        if($alreadyBefriended) {
          $friendshipState = 'alreadyBefriended';
          if($alreadyBefriendedAsOne) {
            $friendship = $this->Friendships->get('friendship', ['user_one' => $this->Auth->user()['id'], 'user_two' => $userShown['id']])->toArray()[0];
          } else {
            $friendship = $this->Friendships->find('friendship', ['user_two' => $this->Auth->user()['id'], 'user_one' => $userShown['id']])->toArray()[0];
          }
          $this->set('friendshipId', $friendship['id']);
        }
        else if($alreadyInvited) {
          $friendshipState = 'alreadyInvited';
        }
        else if ($waitingForAproval) {
          $friendshipState = 'waitingForAproval';
        } else {
          $friendshipState = 'nothing';
        }
        $this->set('userShown', $userShown);
        $this->set('friendshipState', $friendshipState);
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

}
