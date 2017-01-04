<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Friendships Controller
 *
 * @property \App\Model\Table\FriendshipsTable $Friendships
 */
class FriendshipsController extends AppController
{

    /**
     * View method
     *
     * @param string|null $id Friendship id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $friendship = $this->Friendships->get($id, [
            'contain' => []
        ]);

        $this->set('friendship', $friendship);
        $this->set('_serialize', ['friendship']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add($user)
    {
      $friendship = $this->friendships->newEntity();
      $friendship->user_one = $this->Auth->user()['id'];
      $friendship->user_two = $user;
      if ($this->friendships->save($friendship)) {
          $this->Flash->success(__('Vous êtes à présents amis'));
      } else {
          $this->Flash->error(__('Oups, votre acceptation de la demande d\'amitié n\'a pas pu être prise en compte'));
      }

      return $this->redirect($this->referer());
    }
    /**
     * Delete method
     *
     * @param string|null $id Friendship id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $friendship = $this->Friendships->get($id);
        if ($this->Friendships->delete($friendship)) {
            $this->Flash->success(__('Vous n\'êtes à présent plus amis'));
        } else {
            $this->Flash->error(__('Oups, votre demande n\'a pas pu être prise en compte.'));
        }

        return $this->redirect($this->referer());
    }
}
