<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * InvitesFriend Controller
 *
 * @property \App\Model\Table\InvitesFriendTable $InvitesFriend
 */
class InvitesFriendController extends AppController
{
    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add($user)
    {
        $invitesFriend = $this->InvitesFriend->newEntity();
        $invitesFriend->user_inviting = $this->Auth->user()['id'];
        $invitesFriend->user_invited = $user;
        if ($this->InvitesFriend->save($invitesFriend)) {
            $this->Flash->success(__('The invites friend has been saved.'));
        } else {
            $this->Flash->error(__('The invites friend could not be saved. Please, try again.'));
        }

        return $this->redirect($this->referer());
    }

    /**
     * Delete method
     *
     * @param string|null $id Invites Friend id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $invitesFriend = $this->InvitesFriend->get($id);
        if ($this->InvitesFriend->delete($invitesFriend)) {
            $this->Flash->success(__('The invites friend has been deleted.'));
        } else {
            $this->Flash->error(__('The invites friend could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
