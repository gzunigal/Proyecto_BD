<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tasks Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Missions
 * @property \Cake\ORM\Association\HasMany $Problems
 * @property \Cake\ORM\Association\HasMany $Requests
 * @property \Cake\ORM\Association\BelongsToMany $Abilities
 * @property \Cake\ORM\Association\BelongsToMany $Docs
 * @property \Cake\ORM\Association\BelongsToMany $Users
 *
 * @method \App\Model\Entity\Task get($primaryKey, $options = [])
 * @method \App\Model\Entity\Task newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Task[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Task|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Task patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Task[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Task findOrCreate($search, callable $callback = null)
 */
class TasksTable extends Table
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

        $this->table('tasks');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Missions', [
            'foreignKey' => 'mission_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Problems', [
            'foreignKey' => 'task_id'
        ]);
        $this->hasMany('Requests', [
            'foreignKey' => 'task_id'
        ]);
        $this->belongsToMany('Abilities', [
            'foreignKey' => 'task_id',
            'targetForeignKey' => 'ability_id',
            'joinTable' => 'abilities_tasks'
        ]);
        $this->belongsToMany('Docs', [
            'foreignKey' => 'task_id',
            'targetForeignKey' => 'doc_id',
            'joinTable' => 'docs_tasks'
        ]);
        $this->belongsToMany('Users', [
            'foreignKey' => 'task_id',
            'targetForeignKey' => 'user_id',
            'joinTable' => 'tasks_users'
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
            ->allowEmpty('nombre_tarea');

        $validator
            ->allowEmpty('descripcion_tarea');

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
        $rules->add($rules->existsIn(['mission_id'], 'Missions'));

        return $rules;
    }
}
