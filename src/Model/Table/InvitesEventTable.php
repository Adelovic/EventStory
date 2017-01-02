<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * InvitesEvent Model.
 *
 * @method \App\Model\Entity\InvitesEvent get($primaryKey, $options = [])
 * @method \App\Model\Entity\InvitesEvent newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\InvitesEvent[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\InvitesEvent|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\InvitesEvent patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\InvitesEvent[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\InvitesEvent findOrCreate($search, callable $callback = null)
 */
class InvitesEventTable extends Table
{
    /**
     * Initialize method.
     *
     * @param array $config The configuration for the Table
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('invites_event');
        $this->displayField('id');
        $this->primaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance
     *
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->integer('event')
            ->requirePresence('event', 'create')
            ->notEmpty('event');

        $validator
            ->integer('user_inviting')
            ->requirePresence('user_inviting', 'create')
            ->notEmpty('user_inviting');

        $validator
            ->integer('user_invited')
            ->requirePresence('user_invited', 'create')
            ->notEmpty('user_invited');

        return $validator;
    }

    public function findInvite(Query $query, array $options)
    {
        $query->where([
          'InvitesEvent.user_invited' => $options['user'],
      ]);

        return $query;
    }

    public function findInviteEvent(Query $query, array $options)
    {
        $query->where([
          'InvitesEvent.user_invited' => $options['user'],
      ])->andwhere([
          'InvitesEvent.event' => $options['event']
      ]);

        return $query;
    }

    public function findInvitesEvent(Query $query, array $options)
    {
        $query->where([
          'InvitesEvent.event' => $options['event']
      ]);

        return $query;
    }
}
