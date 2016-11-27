<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TasksUsers Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Tasks
 * @property \Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\TasksUser get($primaryKey, $options = [])
 * @method \App\Model\Entity\TasksUser newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TasksUser[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TasksUser|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TasksUser patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TasksUser[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TasksUser findOrCreate($search, callable $callback = null)
 */
class TasksUsersTable extends Table
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

        $this->table('tasks_users');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Tasks', [
            'foreignKey' => 'task_id',
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
            ->integer('valoracion')
            ->requirePresence('valoracion', 'create')
            ->notEmpty('valoracion');

        $validator
            ->requirePresence('comentario_eval', 'create')
            ->notEmpty('comentario_eval');

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
        $rules->add($rules->existsIn(['task_id'], 'Tasks'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
