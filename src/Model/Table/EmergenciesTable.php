<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Emergencies Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Users
 * @property \Cake\ORM\Association\BelongsTo $Communes
 * @property \Cake\ORM\Association\HasMany $Missions
 *
 * @method \App\Model\Entity\Emergency get($primaryKey, $options = [])
 * @method \App\Model\Entity\Emergency newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Emergency[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Emergency|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Emergency patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Emergency[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Emergency findOrCreate($search, callable $callback = null)
 */
class EmergenciesTable extends Table
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

        $this->table('emergencies');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id'
        ]);
        $this->belongsTo('Communes', [
            'foreignKey' => 'commune_id'
        ]);
        $this->hasMany('Missions', [
            'foreignKey' => 'emergency_id'
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
            ->requirePresence('nombre_emergencia', 'create')
            ->notEmpty('nombre_emergencia');

        $validator
            ->dateTime('fecha_emergencia')
            ->requirePresence('fecha_emergencia', 'create')
            ->notEmpty('fecha_emergencia');

        $validator
            ->integer('gravedad_emergencia')
            ->requirePresence('gravedad_emergencia', 'create')
            ->notEmpty('gravedad_emergencia');

        $validator
            ->integer('estado_emergencia')
            ->requirePresence('estado_emergencia', 'create')
            ->notEmpty('estado_emergencia');

        $validator
            ->allowEmpty('descripcion_emergencia');

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
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['commune_id'], 'Communes'));

        return $rules;
    }
}
