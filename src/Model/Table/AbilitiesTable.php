<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Abilities Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Tasks
 * @property \Cake\ORM\Association\BelongsToMany $Users
 *
 * @method \App\Model\Entity\Ability get($primaryKey, $options = [])
 * @method \App\Model\Entity\Ability newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Ability[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ability|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ability patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Ability[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ability findOrCreate($search, callable $callback = null)
 */
class AbilitiesTable extends Table
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

        $this->table('abilities');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsToMany('Tasks', [
            'foreignKey' => 'ability_id',
            'targetForeignKey' => 'task_id',
            'joinTable' => 'abilities_tasks'
        ]);
        $this->belongsToMany('Users', [
            'foreignKey' => 'ability_id',
            'targetForeignKey' => 'user_id',
            'joinTable' => 'abilities_users'
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
            ->requirePresence('nombre_habilidad', 'create')
            ->notEmpty('nombre_habilidad');

        $validator
            ->allowEmpty('descripcion_actividad');

        return $validator;
    }
}
