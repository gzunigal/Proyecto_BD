<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Problems Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Tasks
 *
 * @method \App\Model\Entity\Problem get($primaryKey, $options = [])
 * @method \App\Model\Entity\Problem newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Problem[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Problem|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Problem patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Problem[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Problem findOrCreate($search, callable $callback = null)
 */
class ProblemsTable extends Table
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

        $this->table('problems');
        $this->displayField('id');
        $this->primaryKey('id');

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
            ->allowEmpty('descripcion_problema');

        $validator
            ->integer('gravedad_problema')
            ->requirePresence('gravedad_problema', 'create')
            ->notEmpty('gravedad_problema');

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

        return $rules;
    }
}
