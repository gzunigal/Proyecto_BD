<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Communes Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Regions
 * @property \Cake\ORM\Association\HasMany $Emergencies
 * @property \Cake\ORM\Association\HasMany $Users
 *
 * @method \App\Model\Entity\Commune get($primaryKey, $options = [])
 * @method \App\Model\Entity\Commune newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Commune[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Commune|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Commune patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Commune[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Commune findOrCreate($search, callable $callback = null)
 */
class CommunesTable extends Table
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

        $this->table('communes');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Regions', [
            'foreignKey' => 'region_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Emergencies', [
            'foreignKey' => 'commune_id'
        ]);
        $this->hasMany('Users', [
            'foreignKey' => 'commune_id'
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
            ->requirePresence('nombre_comuna', 'create')
            ->notEmpty('nombre_comuna');

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
        $rules->add($rules->existsIn(['region_id'], 'Regions'));

        return $rules;
    }
}
