<?php
namespace App\Controller;

use Cake\ORM\TableRegistry;
use App\Controller\AppController;

/**
 * Missions Controller
 *
 * @property \App\Model\Table\MissionsTable $Missions
 */
class MissionsController extends AppController
{
    

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Emergencies', 'Users']
        ];
        $missions = $this->paginate($this->Missions);

        $this->set(compact('missions'));
        $this->set('_serialize', ['missions']);

        $datos = $this->request->data;
        if($this->request->is('post'))
        {
            print_r($datos);
            if($datos['cambio'] == 'm_status_change')
            {
                echo '<br><br><br><br><br> ADASDASD <br><br><br><br>';
            }
        }
    }

    /**
     * View method
     *
     * @param string|null $id Mission id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id)
    {
        $this->loadModel('Tasks');

        $mission = $this->Missions->find('all')
            ->where(['Missions.id' => $id]);

        $tasks = $this->Tasks->find('all')
            ->where(['Tasks.mission_id' => $id]);

        $this->set(compact('mission'));
        $this->set(compact('tasks'));


    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add($idEmergencia)
    {
        $this->loadModel('Users');

        $users = $this->Users->find('all');

        $this->set(compact('users'));
        $this->set(compact('idEmergencia'));

        $datos = $this->request->data;
        if($this->request->is('post'))
        {
            $missionsTable = TableRegistry::get('Missions');
            
            $mission = $missionsTable->newEntity();

            $mission->emergency_id  = $idEmergencia;
            $mission->nombre_mision = $datos['mission_name'];
            $mission->user_id       = $datos['mission_manager'];

            if($missionsTable->save($mission))
            {
                $this->redirect("/administrator/view");
            }
        }
    }

    /**
     * Edit method
     *
     * @param string|null $id Mission id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
    }

    /**
     * Delete method
     *
     * @param string|null $id Mission id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
    }
}
