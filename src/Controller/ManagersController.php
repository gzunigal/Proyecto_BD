<?php
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\ORM\TableRegistry;

class ManagersController extends AppController
{
    public function index()
    {
        //Deberia mostrarse todas las misiones
        
    }

    public function defineTask($id_mission)
    {
    	$mission = TableRegistry::get('Missions')->find('all',
    		['conditions' => ['Missions.id =' => $id_mission]]);

    	$this->set(compact('mission'));
    }

    public function manageMission()
    {
        $this->loadModel('Missions');
        $this->loadModel('Emergencies');
        $this->loadModel('Communes');

        $sesion = $this->request->session();
        $missions = $this->Missions->find('all')
                ->where(['Missions.user_id =' => $sesion->read('User.id')])
                ->contain(['Emergencies.Communes']);

        echo '<br><br><br><br>';

        foreach ($missions as $m) {
            print_r($m->emergency->estado_emergencia);
            echo '<br>';
        }

        $this->set(compact('missions'));
    }

    public function ManageTask($id_task)
    {

    	$tasks = TableRegistry::get('Tasks')->find('all') 
                ->where(['Tasks.id' => $id_task]);

    	$this->set(compact('tasks'));
    }

    public function sendSolicituideUser($id_user)
    {

    }

    public function logout(){
        return $this->redirect($this->Auth->logout());
    }

}