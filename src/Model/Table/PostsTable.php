<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Posts Model.
 *
 * @method \App\Model\Entity\Post get($primaryKey, $options = [])
 * @method \App\Model\Entity\Post newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Post[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Post|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Post patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Post[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Post findOrCreate($search, callable $callback = null)
 */
class PostsTable extends Table
{
    /**
     * Initialize method.
     *
     * @param array $config The configuration for the Table
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('posts');
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
            ->integer('author')
            ->requirePresence('author', 'create')
            ->notEmpty('author');

        $validator
            ->dateTime('date_post')
            ->requirePresence('date_post', 'create')
            ->notEmpty('date_post');

        $validator
            ->requirePresence('text_post', 'create')
            ->notEmpty('text_post');

        $validator
            ->integer('event')
            ->requirePresence('event', 'create')
            ->notEmpty('event');

        $validator
            ->integer('parent')
            ->allowEmpty('parent');

        return $validator;
    }
}
