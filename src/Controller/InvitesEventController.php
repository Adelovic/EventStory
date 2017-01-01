<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * InvitesEvent Controller
 *
 * @property \App\Model\Table\InvitesEventTable $InvitesEvent
 */
class InvitesEventController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $invitesEvent = $this->paginate($this->InvitesEvent);

        $this->set(compact('invitesEvent'));
        $this->set('_serialize', ['invitesEvent']);
    }

    /**
     * View method
     *
     * @param string|null $id Invites Event id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $invitesEvent = $this->InvitesEvent->get($id, [
            'contain' => []
        ]);

        $this->set('invitesEvent', $invitesEvent);
        $this->set('_serialize', ['invitesEvent']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add($event, $user)
    {
      $invitesEvent = $this->InvitesFriend->newEntity();
      $invitesEvent->user_inviting = $this->Auth->user()['id'];
      $invitesEvent->user_invited = $user;
      $invitesEvent->event = $event;
      if ($this->InvitesFriend->save($invitesEvent)) {
          $this->Flash->success(__('The invites friend has been saved.'));
      } else {
          $this->Flash->error(__('The invites friend could not be saved. Please, try again.'));
      }

      return $this->redirect($this->referer());
    }

    /**
     * Edit method
     *
     * @param string|null $id Invites Event id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $invitesEvent = $this->InvitesEvent->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $invitesEvent = $this->InvitesEvent->patchEntity($invitesEvent, $this->request->data);
            if ($this->InvitesEvent->save($invitesEvent)) {
                $this->Flash->success(__('The invites event has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The invites event could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('invitesEvent'));
        $this->set('_serialize', ['invitesEvent']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Invites Event id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $invitesEvent = $this->InvitesEvent->get($id);
        if ($this->InvitesEvent->delete($invitesEvent)) {
            $this->Flash->success(__('The invites event has been deleted.'));
        } else {
            $this->Flash->error(__('The invites event could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
