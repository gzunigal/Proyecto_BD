<?php
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\ORM\TableRegistry;

class ManagerController extends AppController
{
    public function index()
    {
        //Deberia mostrarse todas las misiones
        $missions = TableRegistry::get('Missions')->find('all');

        $this->set(compact('missions'));
    }

    public function defineTask($id_mission)
    {
    	$mission = TableRegistry::get('Missions')->find('all',
    		['conditions' => ['Missions.id =' => $id_mission]]);

    	$this->set(compact('mission'));
    }

    public function ManageTask($id_task)
    {

    	$tasks = TableRegistry::get('Tasks')->find('all', 
                ['conditions' => ['Tasks.id =' => $id_task]]
            );
    	$this->set(compact('tasks'));
    }

    public function sendSolicituideUser($id_user)
    {

    }

    public function logout(){
        return $this->redirect($this->Auth->logout());
    }

}