<?php
namespace App\Controller;

use Cake\ORM\TableRegistry;
use App\Controller\AppController;

/**
 * Tasks Controller
 *
 * @property \App\Model\Table\TasksTable $Tasks
 */
class TasksController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
    }

    /**
     * View method
     *
     * @param string|null $id Task id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add($idMision)
    {
        $datos = $this->request->data;
       
        $this->set(compact('idMision'));
        if($this->request->is('post'))
        {
            $tasksTable = TableRegistry::get('Tasks');
            $tasks = $tasksTable->newEntity();

            $tasks->mission_id = $datos['idMision'];
            $tasks->nombre_tarea = $datos['task_name'];
            $tasks->descripcion_tarea = $datos['task_description'];
            $tasksTable->save($tasks);
            return $this->redirect(['controller' => 'tasks', 'action' => 'add', $datos['idMision']]);   
        }
    }

    /**
     * Edit method
     *
     * @param string|null $id Task id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function assign($idMision, $idTask)
    {
        $this->loadModel('AbilitiesTasks');
        $this->loadModel('Abilities');
        
        

        $taskAbilities = $this->AbilitiesTasks->find('all')
            ->where(['AbilitiesTasks.task_id' => $idTask])
            ->contain(['Abilities']);

        

        $abilities = $this->Abilities->find('all');

        $this->set(compact('idMision'));
        $this->set(compact('idTask'));   
        $this->set(compact('taskAbilities'));
        $this->set(compact('abilities'));

        $datos = $this->request->data;
        if($this->request->is('post'))
        {
            $aTasksTable = TableRegistry::get('AbilitiesTasks');

            $abilitiesTasks = $aTasksTable->newEntity();
            $existe = $this->AbilitiesTasks->find('all')
            ->where(['AbilitiesTasks.ability_id' => $datos['ability_new']]);

            if($existe->count() == 0)
            {
                $abilitiesTasks->task_id            = $datos['ability_task'];
                $abilitiesTasks->nivel_requerido    = $datos['ability_lvl'];
                $abilitiesTasks->ability_id         = $datos['ability_new'];
    
                $aTasksTable->save($abilitiesTasks);
            }
        }
    }

    public function select($idMision, $idTask)
    {
        $this->loadModel('Users');
        $this->loadModel('abilitiesTasks');

        $task = $this->Tasks->find('all')
            ->where(['Tasks.id' => $idTask]);

        $candidatos = $this->Users->find('all')
            ->where(['Users.disponibilidad' => 1]);


        $this->set(compact('idTask'));
        $this->set(compact('idMision'));
        $this->set(compact('candidatos'));
        $this->set(compact('task'));
    }
}
