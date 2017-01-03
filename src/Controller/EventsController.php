<?php

namespace App\Controller;

/**
 * Events Controller.
 *
 * @property \App\Model\Table\EventsTable $Events
 */
class EventsController extends AppController
{
    /**
     * View method.
     *
     * @param string|null $id Event id
     *
     * @return \Cake\Network\Response|null
     *
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found
     */
    public function view($id = null)
    {
        $event = $this->Events->get($id);
        $this->set('event', $event);

        $this->loadModel('InvitesEvent');
        $this->loadModel('Participations');
        $participates = $this->Participations->exists(['user' => $this->Auth->user()['id'], 'event' => $event['id']]);

        // Check si on a le droit d'être sur la page de l'évenemnt, redirige sinon
        if (!($event['visibility_type'] == 'public' || $participates || $this->InvitesEvent->exists(['user_invited' => $this->Auth->user()['id'], 'event' => $event['id']]))) {
            $this->redirect($this->referer());
        }

        $this->loadModel('Users');
        $creator = $this->Users->get($event['creator_user']);
        $this->set('creator', $creator);

        $this->loadModel('Pictures');
        $picture = $this->Pictures->get($creator['picture']);
        $this->set('avatar', $picture);

        $this->set('participates', $participates);

        $queryParticipants = $this->Participations->find('event', ['event' => $event['id']]);
        $participants = $queryParticipants->select(['count' => $queryParticipants->func()->count('*')])->toArray()[0]['count'];
        $this->set('participants', $participants);

        $queryGuests = $this->InvitesEvent->find('invitesEvent', ['event' => $event['id']]);
        $guests = $queryGuests->select(['count' => $queryGuests->func()->count('*')])->toArray()[0]['count'];
        $this->set('guests', $guests);

        if ($event['invitation_type'] == 'everyone' || $creator['id'] == $this->Auth->user()['id']) {
            $this->loadModel('Friendships');
            $friendshipsQuery = $this->Friendships->find('friends', ['user' => $this->Auth->user()['id']]);
            $friends = array();
            foreach ($friendshipsQuery as $friendship) {
                if ($friendship['user_one'] == $this->Auth->user()['id']) {
                    $friend = $this->Users->get($friendship['user_two']);
                } else {
                    $friend = $this->Users->get($friendship['user_one']);
                }
                if(!$this->Participations->exists(['user' => $friend['id'], 'event' => $event['id']])) {
                  $friends[] = $friend;
                }
            }
            $this->set('friends', $friends);
        }

        // Google maps key
        $key = 'AIzaSyCVETMAWk7-BKkM4n0JyY9lEUQ6Rer6TT8';
        $address = 'https://maps.googleapis.com/maps/api/geocode/json?address='.urlencode($event['address']).'&key='.$key;
        $json = json_decode(file_get_contents($address), true);

        if ($json['status'] !== 'ZERO_RESULTS') {
            $coordinates = $json['results'][0]['geometry']['location'];
            $this->set('coordinates', $coordinates);
        }

        // Passage des informations de l'image
        $this->set('event_image', $this->Pictures->get($event['picture']));
    }

    /**
     * Add method.
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise
     */
    public function add()
    {
        if ($this->request->is('post')) 
        {
    
            // Création de l'entité événement
            $event = $this->Events->newEntity();

            // Ajout de l'id du créateur avant sauvegarde
            $event->creator_user=$this->Auth->user()['id'];

            // Si une image est fournie, on passe une variable temporaire au callback beforeSave
            if ($this->request->data['picture']['size'] != 0)
            {
                $event->picture_tmp = $this->request->data['picture'];
            }

            $event = $this->Events->patchEntity($event, $this->request->data);
            if ($this->Events->save($event)) 
            {
                $this->Flash->success(__('L\'événement a été sauvegardé.'));
                //return $this->redirect(['action' => 'view'], $event['id']);
            } else {
                $this->Flash->error(__('Erreur de création de l\'événement.'));
            }
        }
    }

    /**
     * Edit method.
     *
     * @param string|null $id Event id
     *
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise
     *
     * @throws \Cake\Network\Exception\NotFoundException When record not found
     */
    public function edit($id = null)
    {
        $event = $this->Events->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $event = $this->Events->patchEntity($event, $this->request->data);
            if ($this->Events->save($event)) {
                $this->Flash->success(__('The event has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The event could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('event'));
        $this->set('_serialize', ['event']);
    }

    /**
     * Delete method.
     *
     * @param string|null $id Event id
     *
     * @return \Cake\Network\Response|null Redirects to index
     *
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $event = $this->Events->get($id);
        if ($this->Events->delete($event)) {
            $this->Flash->success(__('The event has been deleted.'));
        } else {
            $this->Flash->error(__('The event could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
