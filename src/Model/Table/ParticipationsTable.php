<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Participations Model
 *
 * @method \App\Model\Entity\Participation get($primaryKey, $options = [])
 * @method \App\Model\Entity\Participation newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Participation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Participation|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Participation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Participation[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Participation findOrCreate($search, callable $callback = null)
 */
class ParticipationsTable extends Table
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

        $this->table('participations');
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
            ->integer('user')
            ->requirePresence('user', 'create')
            ->notEmpty('user');

        $validator
            ->integer('event')
            ->requirePresence('event', 'create')
            ->notEmpty('event');

        return $validator;
    }

    public function findEvent(Query $query, array $options)
    {
        $query->where([
            'Participations.user' => $options['user']
        ])->andWhere([
            'Participations.event' => $options['event']
        ]);

        return $query;
    }
}
