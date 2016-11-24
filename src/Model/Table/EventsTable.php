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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('title', 'create')
            ->notEmpty('title');

        $validator
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        $validator
            ->date('added_on')
            ->requirePresence('added_on', 'create')
            ->notEmpty('added_on');

        $validator
            ->date('happens_on')
            ->requirePresence('happens_on', 'create')
            ->notEmpty('happens_on');

        $validator
            ->requirePresence('city', 'create')
            ->notEmpty('city');

        $validator
            ->integer('created_by')
            ->requirePresence('created_by', 'create')
            ->notEmpty('created_by');

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
            'Events.title LIKE' => '%'.$options['query'].'%'
        ]);

        return $query;
    }
}
