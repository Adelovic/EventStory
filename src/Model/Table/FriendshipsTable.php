<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Friendships Model
 *
 * @method \App\Model\Entity\Friendship get($primaryKey, $options = [])
 * @method \App\Model\Entity\Friendship newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Friendship[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Friendship|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Friendship patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Friendship[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Friendship findOrCreate($search, callable $callback = null)
 */
class FriendshipsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('friendships');
        $this->displayField('id');
        $this->primaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->integer('user_one')
            ->requirePresence('user_one', 'create')
            ->notEmpty('user_one');

        $validator
            ->integer('user_two')
            ->requirePresence('user_two', 'create')
            ->notEmpty('user_two');

        return $validator;
    }

    public function findFriends(Query $query, array $options)
    {
        $query->where([
            'Friendships.user_one' => $options['user']
        ])->orWhere([
            'Friendships.user_two' => $options['user']
        ]);

        return $query;
    }
}
