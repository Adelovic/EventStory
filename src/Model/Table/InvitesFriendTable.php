<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * InvitesFriend Model.
 *
 * @method \App\Model\Entity\InvitesFriend get($primaryKey, $options = [])
 * @method \App\Model\Entity\InvitesFriend newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\InvitesFriend[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\InvitesFriend|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\InvitesFriend patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\InvitesFriend[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\InvitesFriend findOrCreate($search, callable $callback = null)
 */
class InvitesFriendTable extends Table
{
    /**
     * Initialize method.
     *
     * @param array $config The configuration for the Table
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('invites_friend');
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
          'InvitesFriend.user_invited' => $options['user'],
      ]);

        return $query;
    }
}
