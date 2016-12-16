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
        
        $this->set(compact('idMision'));

        $taskabilities = $this->AbilitiesTasks->find('all')->where(['AbilitiesTask.task_id' => $idTask]);
        $abilities = $this->Abilities->find('all');

        $this->set(compact('taskabilities'));
        $this->set(compact('abilities'));
        $this->set(compact('idMision'));
        $this->set(compact('idTask'));

        $datos = $this->request->data;
        if($this->request->is('post'))
        {
            $aTasksTable = TableRegistry::get('AbilitiesTasks');

            $abilitiesTasks = $aTasksTable->newEntity();

            $abilitiesTasks->task_id            = $datos['task'];
            $abilitiesTasks->nivel_requerido    = $datos['lvl'];
            $abilitiesTasks->ability_id         = $datos['all_abilities'];

            $aTasksTable->save($abilitiesTasks);
        }
    }

    /**
     * Delete method
     *
     * @param string|null $id Task id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
    }
}
