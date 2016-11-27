<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AbilitiesTasks Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Abilities
 * @property \Cake\ORM\Association\BelongsTo $Tasks
 *
 * @method \App\Model\Entity\AbilitiesTask get($primaryKey, $options = [])
 * @method \App\Model\Entity\AbilitiesTask newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AbilitiesTask[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AbilitiesTask|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AbilitiesTask patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AbilitiesTask[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AbilitiesTask findOrCreate($search, callable $callback = null)
 */
class AbilitiesTasksTable extends Table
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

        $this->table('abilities_tasks');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Abilities', [
            'foreignKey' => 'ability_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Tasks', [
            'foreignKey' => 'task_id',
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
            ->integer('nivel_requerido')
            ->allowEmpty('nivel_requerido');

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
        $rules->add($rules->existsIn(['ability_id'], 'Abilities'));
        $rules->add($rules->existsIn(['task_id'], 'Tasks'));

        return $rules;
    }
}
