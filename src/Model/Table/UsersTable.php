<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Communes
 * @property \Cake\ORM\Association\HasMany $Emails
 * @property \Cake\ORM\Association\HasMany $Emergencies
 * @property \Cake\ORM\Association\HasMany $Messages
 * @property \Cake\ORM\Association\HasMany $Missions
 * @property \Cake\ORM\Association\HasMany $Phones
 * @property \Cake\ORM\Association\HasMany $Requests
 * @property \Cake\ORM\Association\BelongsToMany $Abilities
 * @property \Cake\ORM\Association\BelongsToMany $Messages
 * @property \Cake\ORM\Association\BelongsToMany $Notifications
 * @property \Cake\ORM\Association\BelongsToMany $Tasks
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null)
 */
class UsersTable extends Table
{

    /**
     * Metodo para comparar username y password contra la BD y verificar los datos de login
     * @param Nombre de usuario y password
     * @return Entity User si verifica usuario, NULL si no se verifican datos.
     */
    public function login($username,$password){
        $user = $this->find()
            ->where([
                'username'=>$username,
                'password'=>(new DefaultPasswordHasher)->hash($password)
            ])
            ->first();
        return $user;
    }






    /********************************/
    /*** METODOS CREADOS POR BAKE ***/
    /********************************/

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('users');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Communes', [
            'foreignKey' => 'commune_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Emails', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Emergencies', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Messages', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Missions', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Phones', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Requests', [
            'foreignKey' => 'user_id'
        ]);
        $this->belongsToMany('Abilities', [
            'foreignKey' => 'user_id',
            'targetForeignKey' => 'ability_id',
            'joinTable' => 'abilities_users'
        ]);
        $this->belongsToMany('Messages', [
            'foreignKey' => 'user_id',
            'targetForeignKey' => 'message_id',
            'joinTable' => 'messages_users'
        ]);
        $this->belongsToMany('Notifications', [
            'foreignKey' => 'user_id',
            'targetForeignKey' => 'notification_id',
            'joinTable' => 'notifications_users'
        ]);
        $this->belongsToMany('Tasks', [
            'foreignKey' => 'user_id',
            'targetForeignKey' => 'task_id',
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
            ->requirePresence('nombre_usuario', 'create')
            ->notEmpty('nombre_usuario');

        $validator
            ->requirePresence('password', 'create')
            ->notEmpty('password');

        $validator
            ->boolean('disponibilidad')
            ->requirePresence('disponibilidad', 'create')
            ->notEmpty('disponibilidad');

        $validator
            ->boolean('admin')
            ->requirePresence('admin', 'create')
            ->notEmpty('admin');

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
        $rules->add($rules->existsIn(['commune_id'], 'Communes'));

        return $rules;
    }

    public function getUserByRun($run)
    {
        $user = $this->Users->find('all',
            ['condition' => ['Users.run =' => $run]
            ]);
        if($user->count() > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}
