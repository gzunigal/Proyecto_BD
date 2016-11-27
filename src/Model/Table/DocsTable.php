<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Docs Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Tasks
 *
 * @method \App\Model\Entity\Doc get($primaryKey, $options = [])
 * @method \App\Model\Entity\Doc newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Doc[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Doc|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Doc patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Doc[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Doc findOrCreate($search, callable $callback = null)
 */
class DocsTable extends Table
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

        $this->table('docs');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsToMany('Tasks', [
            'foreignKey' => 'doc_id',
            'targetForeignKey' => 'task_id',
            'joinTable' => 'docs_tasks'
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
            ->requirePresence('nombre_doc', 'create')
            ->notEmpty('nombre_doc');

        $validator
            ->requirePresence('url_doc', 'create')
            ->notEmpty('url_doc');

        return $validator;
    }
}
