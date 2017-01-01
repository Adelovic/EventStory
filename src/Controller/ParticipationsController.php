<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Participations Controller
 *
 * @property \App\Model\Table\ParticipationsTable $Participations
 */
class ParticipationsController extends AppController
{

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add($event)
    {
        $this->loadModel('InvitesEvent');
        $invites = $this->InvitesEvent->find('inviteEvent', ['user' => $this->Auth->user()['id'], 'event' => $event]);
        foreach ($invites as $invite) {
          $this->InvitesEvent->delete($invite);
        }
        $participation = $this->Participations->newEntity();
        $participation->user = $this->Auth->user()['id'];
        $participation->event = $event;
        if ($this->Participations->save($participation)) {
            $this->Flash->success(__('Votre participation à l\'événement a été enregistrée'));
        } else {
            $this->Flash->error(__('Oups, votre participation à l\'événement n\'a pas pu être prise en compte'));
        }

        return $this->redirect($this->referer());
    }

    /**
     * Delete method
     *
     * @param string|null $id Participation id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($event)
    {
        // Ca va renvoyer un seul élément anyway vu que (id, event) est une clé candidate
        $participation = $this->Participations->find('event', ['user' => $this->Auth->user()['id'], 'event' => $event])->toArray()[0];
        if ($this->Participations->delete($participation)) {
            $this->Flash->success(__('Votre changement d\'avis a été pris en compte'));
        } else {
            $this->Flash->error(__('Oups, votre changement d\'avis n\'a pas pu être pris en compte'));
        }

        return $this->redirect($this->referer());
    }
}
