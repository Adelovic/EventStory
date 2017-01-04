<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Events Model.
 *
 * @method \App\Model\Entity\Event get($primaryKey, $options = [])
 * @method \App\Model\Entity\Event newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Event[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Event|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Event patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Event[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Event findOrCreate($search, callable $callback = null)
 */
class EventsTable extends Table
{
    /**
     * Initialize method.
     *
     * @param array $config The configuration for the Table
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('events');
        $this->displayField('title');
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
            ->requirePresence('title', 'create')
            ->notEmpty('title');

        $validator
            ->requirePresence('address', 'create')
            ->notEmpty('address');

        $validator
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        $validator
            ->date('date_happening')
            ->requirePresence('date_happening', 'create')
            ->notEmpty('date_happening');

        $validator
            ->time('time_happening')
            ->requirePresence('time_happening', 'create')
            ->notEmpty('time_happening');

        $validator
            ->date('date_end')
            ->requirePresence('date_end', 'create')
            ->notEmpty('date_end');

        $validator
            ->time('time_end')
            ->requirePresence('time_end', 'create')
            ->notEmpty('time_end');

        $validator
            ->requirePresence('visibility_type', 'create')
            ->inList('visibility_type', array('public', 'private'));

        $validator
            ->requirePresence('invitation_type', 'create')
            ->inList('invitation_type', array('me', 'everyone'));

        $validator
            ->add('picture', 'file', [
    'rule' => ['uploadedFile', ['optional' => true]],
]);

        return $validator;
    }

    public function findCity(Query $query, array $options)
    {
        $query->where([
            'Events.city' => $options['city'],
        ]);

        return $query;
    }

    public function findTitle(Query $query, array $options)
    {
        $query->where([
            'Events.title LIKE' => '%'.$options['query'].'%',
        ]);

        return $query;
    }

}
