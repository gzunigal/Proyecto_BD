<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MessagesUsers Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Messages
 * @property \Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\MessagesUser get($primaryKey, $options = [])
 * @method \App\Model\Entity\MessagesUser newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MessagesUser[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MessagesUser|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MessagesUser patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MessagesUser[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MessagesUser findOrCreate($search, callable $callback = null)
 */
class MessagesUsersTable extends Table
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

        $this->table('messages_users');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Messages', [
            'foreignKey' => 'message_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
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
            ->boolean('visto')
            ->allowEmpty('visto');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['message_id'], 'Messages'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
