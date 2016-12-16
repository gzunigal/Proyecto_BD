<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\TableRegistry;

/**
 * Users Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Communes
 * @property \Cake\ORM\Association\HasMany $Emergencies
 * @property \Cake\ORM\Association\HasMany $Messages
 * @property \Cake\ORM\Association\HasMany $Missions
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
        $hashedPass = (new DefaultPasswordHasher)->hash($password);

        debug($hashedPass);

        $user = $this->find()
            ->where([
                'nombre_usuario'=>$username
            ])
            ->first();
        
        if (!$user) return NULL;

        $validPass = $user->checkPass($password);

        return ($validPass)? $user : NULL;
    }

    public function registerUser($datosUsuario)
    {
        $user = $this->newEntity();
        
        $user->commune_id       = $datosUsuario['communes'];
        $user->nombre_usuario   = $datosUsuario['user_nickname'];
        $user->password         = (new DefaultPasswordHasher)->hash($datosUsuario['user_password']);
        $user->name             = $datosUsuario['user_name'];
        $user->surname          = $datosUsuario['user_surname'];
        $user->run              = $datosUsuario['user_rut'];
        $user->disponibilidad   = $datosUsuario['availability'];
        $user->admin            = 0;
        $user->phone            = $datosUsuario['user_phone'];
        $user->email            = $datosUsuario['user_email'];
        if($this->save($user))
        {
            return true;
        }
        else
        {
            return false;
        }

    }

    public function getUserByData($run, $username)
    {

        $user = $this->find('all',
            ['conditions' => ['Users.run =' => $run]
            ]);
        
        foreach ($user as $u) {
            print_r($u);
        }
        if($user->count() > 0)
        {
            return 1;
        }
        else
        {
            $user = $this->find('all',
            ['conditions' => ['Users.nombre_usuario =' => $username]
            ]);
            if($user->count() > 0)
            {
                return 2;
            }
            return 0;
        }
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
        $this->displayField('name');
        $this->primaryKey('id');

        $this->belongsTo('Communes', [
            'foreignKey' => 'commune_id',
            'joinType' => 'INNER'
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
            ->requirePresence('run', 'create')
            ->notEmpty('run')
            ->add('run', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->requirePresence('nombre_usuario', 'create')
            ->notEmpty('nombre_usuario');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->requirePresence('surname', 'create')
            ->notEmpty('surname');

        $validator
            ->requirePresence('password', 'create')
            ->notEmpty('password');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->requirePresence('phone', 'create')
            ->notEmpty('phone');

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
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->isUnique(['run']));
        $rules->add($rules->existsIn(['commune_id'], 'Communes'));

        return $rules;
    }
}
